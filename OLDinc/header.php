<header>
    <img src="/img/docdeck.svg" alt="">
    <span><h1>Doc<span>Deck</span></h1></span>
    <p>&nbsp;&ndash;&nbsp;
        <span class="sm-hide"><?php echo $thisCourse; ?>
        <?php echo($uri === '/' || $uri === '/index.php') ? '' : ' | </span>'.$thisLesson; ?>
    </p>
    <span class="md-hide">
        <h3>Instructor:</h3>
        <p>Matthew Higley</p>
    </span>
    <span>
        &nbsp;&nbsp;&nbsp;|
        <a href="#" class="logout"><i class="fa fa-sign-out"></i></a>
    </span>
</header>
<?php include('nav.php'); ?>

<main role="main">
    <div class="sections">
