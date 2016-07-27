<header>
    <img src="/img/docdeck.svg" alt="">
    <h1>Doc<span>Deck</span></h1>
    <p>&ndash;&nbsp;
        <?php echo $thisCourse; ?>
        <?php echo($uri === '/' || $uri === '/index.php') ? '' : '| Lesson '.$thisLesson; ?>
    </p>
    <h3>Instructor:</h3>
    <p>Matthew Higley</p> &nbsp;&nbsp;&nbsp;|
    <a href="#" class="logout"><i class="fa fa-sign-out"></i></a>
</header>
<?php include('nav.php'); ?>

<main role="main">
    <div class="sections">
