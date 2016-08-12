<aside>
    <button type="button" id="asideToggle" class="btn">
        <i class="material-icons mi-close">close</i>
        <i class="material-icons mi-menu asideToggle">menu</i>
    </button>
    <div class="navigation">
        <h1><?php $course->buildLessonTitle(); ?></h1>
    </div>
    <div>
        <div class="course tip" data-title="<?php echo $course->lessonFolder; ?>" title="<?php echo $course->lessonFolder; ?>">
            <h1><?php echo $course->lessonIcon; ?></h1>
        </div>
        <hr>
        <div id="section-nav">
            <?php $course->buildLessonPaging(); ?>
        </div>
    </div>
</aside>
<main>
