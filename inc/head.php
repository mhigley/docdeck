<?php include('functions.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DocDeck</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body class="padify <?php echo $thisCourseAbbreviation; ?>">
    <?php
        if($uri === '/' || $uri === '/index.php'){
            include('course-select.php');
            include('header.php');
        }else{
             include('header.php');
        }
     ?>
