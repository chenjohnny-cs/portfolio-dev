<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Fonts & etc -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!-- Local File Includes -->
        <script type="text/javascript" src="./resources/jquery-3.7.1.min.js"></script>
        <link rel="stylesheet" href="./resources/index.css">
        <script src="./resources/index.js"></script>

        <title>Homepage</title>
    </head>

    <body>

    <?php
        include('includes/navbar.inc');
        ?>

    <div id="page-navigation-indicator"></div>
    <div id="page-container" onscroll="nextPage(this)">
        <?php include('includes/pages/page1.inc')?>
        <?php include('includes/pages/page2.inc')?>
        <?php include('includes/pages/page3.inc')?>
        <?php include('includes/pages/page4.inc')?>
        <?php include('includes/pages/page5.inc')?>
        <?php include('includes/pages/page6.inc')?>
        <?php include('includes/pages/page7.inc')?>
    </div>
    </body>
</html>

