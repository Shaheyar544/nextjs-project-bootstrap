<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="bg-white shadow-md">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <div class="flex items-center space-x-4">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto" />
            </a>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => 'nav',
                'container_class' => 'hidden md:flex space-x-6 text-gray-700 font-semibold',
                'menu_class' => 'flex space-x-6',
                'fallback_cb' => false,
            ));
            ?>
        </div>
        <div>
            <a href="tel:1300 501 529" class="bg-red-700 text-white px-4 py-2 rounded-md font-semibold hover:bg-red-800 transition">
                1300 501 529
            </a>
        </div>
    </div>
</header>
