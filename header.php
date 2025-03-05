<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4cf6f4ce3.js" crossorigin="anonymous"></script>
    <title>
        <?php
        wp_title('|', true, 'right');
        bloginfo('name');
        ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>




<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/media/projects/petes-thumb.webp" alt=petes-thumbnail> -->

    <header>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0);" class="icon" onclick="toggleNav()">
                <i class="fa fa-bars"></i>
            </a>
            <a href="front-page.php"class="active">Home</a>
            <a href="page.php" alt=case-studies.php>Web Design</a>
            <a href="page.php" alt=photography.php>Photography</a>
            <a href="singles.php" alt=resume.php>Resume</a>
        </div>
    
        <!-- open sidepanel -->
        <div class="topnav" id="myTopnav">
            <a href="javascript:void(0);" class="icon" onclick="toggleNav()">
                <i class="fa fa-bars"></i>
            </a>
            <a href="front-page.php"class="active">Home</a>
            <a href="page.php" alt=case-studies.php>Web Design</a>
            <a href="page.php" alt=photography.php>Photography</a>
            <a href="singles.php" alt=resume.php>Resume</a>

            <!-- <a href="singles.php" alt=resume.php>Resume</a>
            <a href="page.php" alt=photography.php>Photography</a>
            <a href="page.php" alt=case-studies.php>Web Design</a>
            <a href="front-page.php"class="active">Home</a> -->
        </div>
    
    </header>
    