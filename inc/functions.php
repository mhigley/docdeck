<?php
    ob_start();
    error_reporting(E_ALL); ini_set('display_errors', 1);
    date_default_timezone_set("America/Los_Angeles");

    $docRoot = $_SERVER['DOCUMENT_ROOT'];
    $uri = $_SERVER['REQUEST_URI'];

    $thisDir = array_slice(explode('/', $uri), 1)[0];
    /*  $thisDir =>
        1. Abstract current directory from URL (array_slice)
    */

    switch($thisDir){
        case 'course-bc1':
            $thisCourse = 'Bootcamp 1';
            break;
        case 'course-bc2':
            $thisCourse = 'Bootcamp 2';
            break;
        case 'course-js1':
            $thisCourse = 'Javascript 1';
            break;
        default:
            $thisCourse = 'Geekwise Course';
    }
    /*  $thisCourse =>
            1. Check and compare $thisPage to get course (switch)
    */

    $thisCourseCompressed = str_replace(' ', '', strtolower($thisCourse));
    /*  $thisCourseCompressed =>
            1. Lowercase title of course (strtolower)
            2. Remove all spaces (str_replace)
    */

    $thisCourseAbbreviation = substr($thisDir, 7);
    /*  $thisCourseAbbreviation =>
            1. Get the selected course abbreviation (substr)
    */

    $cookie_name = 'page';
    $cookie_val = $uri;

    if($uri === '/' || $uri === '/index.php'){
        if(isset($_COOKIE[$cookie_name])) {
            header('LOCATION: '.$_COOKIE[$cookie_name]);
        }
    }else{
        setcookie($cookie_name, $cookie_val, time() + (86400 * 30), "/");

        $thisPage = array_slice(explode('/', $uri), 1)[1];
        /*  $thisPage =>
            1. Abstract current page from URL (array_slice)
        */

        $thisDay = explode(".", $thisPage);
        /*  $thisDay =>
                1. Split current page into array (explode)
        */

        $thisLesson = substr($thisDay[0], 6);
        /*  $thisLesson =>
                1. Abstract lesson number from current page (substr)
        */

        $pageDir = $docRoot.'/'.$thisDir;
        /*  $pageDir =>
            1. Set page directory
        */

        $pageArray = scandir($pageDir);
        if($pageArray !== false){
            $pageArr = array();
            foreach($pageArray as $page){
                if($page == '.' || $page == '..' || substr($page, -strlen(".DS_Store")) === ".DS_Store") continue;
                array_push($pageArr, $page);
            }
        }
        /*  $pageArr =>
            1. Get page directory ($pageDir)
            2. Scan and create array (scandir)
            3. Check that directory has files (if)
            4. Create new empty $pageArr (array)
            5. Loop through each page (foreach)
            6. Check for unwanted pages ./, ../, .DS_STORE (if)
            7. Push remaining pages into $pageArr (array_push)
        */

        $pageKey = array_search($thisPage, $pageArr);
        /*  $pageKey =>
            1. Get current page index (array_search)
        */

        $lastPage = end($pageArr);
        /*  $lastPage =>
                1. Get last page in $pageArr (end)
        */

        function bin($bin, $output){
            echo '<a class="jsbin-embed" href="http://jsbin.com/'.$bin.'/embed?'.$output.'"></a>';
        }
    }
?>
