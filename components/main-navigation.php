<header class="header">
    <nav class="nav">
        <?php
        /**
         * Custom Menu Implementation
         * ---------------------------
         * This section uses get_theme_menu() to create a custom menu with more control over the HTML structure.
         *
         * Steps:
         * 1. Ensure the get_theme_menu() function exists in your helper.php
         * 2. Register your menu location in setup.php using register_nav_menus()
         * 3. Create the menu in WordPress admin and assign it to 'primary-menu'
         */

        // Get menu items as an array
        $menu_items = get_theme_menu('primary-menu');

        // Check if menu exists and has items
        if (!empty($menu_items)) : ?>
            <ul class="menu custom-menu">
                <?php foreach ($menu_items as $item) : ?>
                    <li class="menu-item <?php echo implode(' ', $item->classes); ?>"> 
                        <a href="<?php echo esc_url($item->url); ?>" 
                            <?php if (!empty($item->target)) echo 'target="' . esc_attr($item->target) . '"'; ?> 
                            <?php if (!empty($item->xfn)) echo 'rel="' . esc_attr($item->xfn) . '"'; ?>>
                            <?php echo esc_html($item->title); ?> 
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </nav>
</header>
