<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="url" content="http://docdeck.matthewhigley.com">
    <meta name="description" content="Documentation deck providing simple interface to access all class lessons and instruction. For use by Bitwise Industries staff and students.">
    <meta name="author" content="Matthew Higley, mhigley@bitwiseindustries.com">
    <meta name="application-name" content="DocDeck">
    <meta name="keywords" content="html,css,javascript,frontend,development">
    <title>DocDeck | <?php $course->buildLessonTitle(); ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="padify <?php echo $course->lessonIcon; ?>">

    <?php
        if($course->uri === '/' || $course->uri === '/index.php'){
            include_once('select.php');
            include_once('header.php');
        }else{
             include('header.php');
        }
    ?>

    <?php include_once('nav.php'); ?>
