<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4cf6f4ce3.js" crossorigin="anonymous"></script>
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>../styles/main.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- <?php get_template_part('../components/main-navigation'); ?> -->

  <?php 
        wp_nav_menu([
        'theme_location' => 'primary-menu',
        ]);
    ?> 


    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">×</a>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'mobile-menu'
        ));
        ?>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function toggleNav() {
                var sidepanel = document.getElementById("mySidepanel");
                var topnav = document.getElementById("myMain-menu");

                if (sidepanel.style.width === "250px") {
                    sidepanel.style.width = "0";
                    if (window.innerWidth > 1000) {
                    topnav.style.display = "flex"; // Ensure desktop menu reappears
            }
                } else {
                    sidepanel.style.width = "250px";
                    topnav.style.display = "none";
                }
            }
            window.toggleNav = toggleNav; // Make it globally accessible
            if (window.innerWidth > 1000) {
            document.getElementById("myMain-menu").style.display = "flex";
            }
        });
    </script>
  </header>


