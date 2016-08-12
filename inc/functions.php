<?php
    ob_start();
    error_reporting(E_ALL); ini_set('display_errors', 1);
    date_default_timezone_set("America/Los_Angeles");
    class course {
        var $url, $uri, $lessonPathsArray, $lessonPathVoid, $lessonFolder, $lessonTitle, $lessonFile, $lessonIcon;
        function __construct(){
            $this->url = $this->removeAscii( $_SERVER['DOCUMENT_ROOT'] ); // document root
            $this->uri = $this->removeAscii( $_SERVER['REQUEST_URI'] ); // base uri
            if( $this->uri != '/' && $this->uri != '/index.php' ){ // if NOT / or /index.php
                $this->lessonPathsArray = explode( '/', $this->uri ); // break uri into array
                $this->lessonPathVoid = array_shift( $this->lessonPathsArray ); // remove blank index 0
                $this->lessonFolder = $this->lessonPathsArray[0]; // course folder
                $this->lessonTitle = $this->lessonPathsArray[1]; // title folder
                $this->lessonFile = $this->lessonPathsArray[2]; // lesson file
                $this->lessonIcon = substr( $this->lessonFolder, 7 ); // lesson icon
            }
        }
        function dumper($toBeDumped){ echo '<pre>'; var_dump($toBeDumped); echo '</pre>'; } // formatted var_dump
        function addAscii($string){return str_replace(' ', '%20', $string);} // replace spaces with %20
        function removeAscii($string){return str_replace('%20', ' ', $string);} // replace %20 with spaces
        function formatString($string, $true){
            $str = explode( '.', $string )[1];
            $upStr = preg_replace_callback('/[a-z]{4,}|\bi\b/i', function($match){
                return ucfirst($match[0]);
            }, $str);
            if($true){
                return explode( '.', $string )[0].': '.$upStr;
            }
            return $upStr;
        } // strip title numbering and uppercase
        function stripArray($array){
            $newArray = [];
            foreach($array as $a){
                if($a == '.' || $a == '..' || $a == '.DS_Store' || $a == '.htaccess') continue;
                array_push($newArray, $a);
            }
            return $this->natsortArray($newArray);
        }
        function natsortArray($array){
            natsort($array);
            $newArray = array_values($array);
            return $newArray;
        }
        function get_lessonTitles(){
            $titles = scandir($this->url.'/'.$this->lessonFolder.'/');
            return $this->stripArray($titles);
        }
        function get_firstLessonFile(){
            $titles = $this->get_lessonTitles();
            $files = [];
            foreach($titles as $key => $title){
                $file = scandir($this->url.'/'.$this->lessonFolder.'/'.$title.'/');
                $file = $this->stripArray($file);
                array_push($files, $file[0]);
            }
            return $files;
        }
        function get_lessonFiles(){
            $titles = $this->get_lessonTitles();
            $files = [];
            foreach($titles as $key => $title){
                $file = scandir($this->url.'/'.$this->lessonFolder.'/'.$title.'/');
                $file = $this->stripArray($file);
                array_push($files, $file);
            }
            return $files;
        }
        function buildLessonSelect(){
            echo '<select class="" name="chapNum">';
            if( $this->uri != '/' && $this->uri != '/index.php' ){
                foreach($this->get_firstLessonFile() as $key => $lesson){
                    echo ($this->get_firstLessonFile()[$key] == $this->lessonFile) ?
                        '<option data-url="/'.$this->lessonFolder.'/'.$this->get_lessonTitles()[$key].'/'.$lesson.'" selected>'.$this->formatString($lesson, true).'</option>' :
                        '<option data-url="/'.$this->lessonFolder.'/'.$this->get_lessonTitles()[$key].'/'.$lesson.'">'.$this->formatString($lesson, true).'</option>';
                }
            }else{echo '<option selected>Select</option>';}
            echo '</select>';
        }
        function buildLessonTitle(){
            if( $this->uri != '/' && $this->uri != '/index.php' ){ echo $this->formatString( $this->lessonTitle, false ); }
            else{ echo 'Daily Topics'; }
        }
        function buildLessonPaging(){
            if( $this->uri != '/' && $this->uri != '/index.php' ){
                $thisLessonArray = $this->stripArray( scandir( $this->url.'/'.$this->lessonFolder.'/'.$this->lessonTitle ) );
                $pageKey = array_search( $this->lessonFile, $thisLessonArray );
                $lastPage = end( $thisLessonArray );
                echo ( $this->lessonFile == $thisLessonArray[0] ) ?
                    '<a class="paginate disabled"><i class="material-icons">skip_previous</i> <span>prev</span></a>' :
                    '<a class="paginate" href="/'.$this->lessonFolder.'/'.$this->lessonTitle.'/'.$thisLessonArray[$pageKey-1].'"><i class="material-icons">skip_previous</i> <span>prev</span></a>';
                echo ( $this->lessonFile === $lastPage ) ?
                    '<a class="paginate disabled"><span>next</span> <i class="material-icons">skip_next</i></a>' :
                    '<a href="'.$thisLessonArray[$pageKey+1].'" class="paginate"><span>next</span> <i class="material-icons">skip_next</i></a>';
            }else{echo '<a class="paginate disabled"><i class="material-icons">skip_previous</i> <span>prev</span></a><a class="paginate disabled"><span>next</span> <i class="material-icons">skip_next</i></a>';}
        }
    }
    $course = new course;
?>
