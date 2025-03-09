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
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/styles/main.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0);" class="icon" onclick="toggleNav()">
                <i class="fa fa-bars"></i>
            </a>
            <a href="<?php echo home_url('/'); ?>" class="<?php echo is_front_page() ? 'active' : ''; ?>">Home</a>
            <a href="<?php echo get_permalink(get_page_by_path('about-me')); ?>" class="<?php echo is_page('about-me') ? 'active' : ''; ?>">About Me</a>
            <a href="<?php echo get_permalink(get_page_by_path('photography')); ?>" class="<?php echo is_page('photography') ? 'active' : ''; ?>">Photography</a>
            <a href="<?php echo get_permalink(get_page_by_path('resume')); ?>" class="<?php echo is_page('resume') ? 'active' : ''; ?>">Resume</a>
        </div>

        <!-- Open Sidepanel -->
        <div class="topnav" id="myTopnav">
            <a href="javascript:void(0);" class="icon" onclick="toggleNav()">
                <i class="fa fa-bars"></i>
            </a>
            <a href="<?php echo get_permalink(get_page_by_path('resume')); ?>" class="<?php echo is_page('resume') ? 'active' : ''; ?>">Resume</a>
            <a href="<?php echo get_permalink(get_page_by_path('photography')); ?>" class="<?php echo is_page('photography') ? 'active' : ''; ?>">Photography</a>
            <a href="<?php echo get_permalink(get_page_by_path('about-me')); ?>" class="<?php echo is_page('about-me') ? 'active' : ''; ?>">About Me</a>
            <a href="<?php echo home_url('/'); ?>" class="<?php echo is_front_page() ? 'active' : ''; ?>">Home</a>
        </div>
    </header>
