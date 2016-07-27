<aside>
    <button type="button" id="asideToggle" class="btn"><i class="fa fa-close"></i><i class="fa fa-bars asideToggle"></i></button>
    <div class="navigation">
        <h2>Today's Topics</h2>
    </div>
    <div>
        <div class="course tip" data-title="<?php echo $thisCourseCompressed; ?>" title="<?php echo $thisCourse; ?>">
            <h1><?php echo $thisCourseAbbreviation; ?></h1></div>
        <hr>
        <div>
            <?php
                if($uri === '/' || $uri === '/index.php'){
                    echo '<a class="paginate disabled"><i class="fa fa-caret-left"></i> prev<span> lesson</span></a>';
                    echo '<a class="paginate disabled">next<span> lesson</span> <i class="fa fa-caret-right"></i></a>';
                }else{
                    echo($thisPage === $pageArr[0])
                        ? '<a class="paginate disabled"><i class="fa fa-caret-left"></i> prev<span> lesson</span></a>'
                        : '<a class="paginate" href="/'.$thisDir.'/'.$pageArr[$pageKey-1].'"><i class="fa fa-caret-left"></i> prev<span> lesson</span></a>';

                    echo($thisPage === $lastPage)
                        ? '<a class="paginate disabled">next<span> lesson</span> <i class="fa fa-caret-right"></i></a>'
                        : '<a href="'.$pageArr[$pageKey+1].'" class="paginate">next<span> lesson</span> <i class="fa fa-caret-right"></i></a>';
                }
            ?>
        </div>
    </div>
</aside>
