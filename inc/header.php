<header>
    <img src="/img/docdeck.svg" alt="">
    <span><h1>Doc<span>Deck</span></h1></span>
    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <span>Chapter</span>
    <div id="chapter-nav">
        <form name="myForm" method="post" action="#">
            <?php $course->buildLessonSelect(); ?>
            <i class="material-icons">arrow_drop_down</i>
        </form>
    </div>
    <span class="md-hide">
        <h3>Instructor:</h3>
        <p>Matthew Higley</p>
    </span>
    <span>
        &nbsp;&nbsp;&nbsp;|
        <a href="#" class="logout"><i class="material-icons">exit_to_app</i></a>
        <!-- <a href="#" class="logout"><i class="fa fa-sign-out"></i></a> -->
    </span>
</header>
