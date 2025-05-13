<?php
// Enqueue Tailwind CSS and theme styles/scripts
function big_bull_movers_enqueue_scripts() {
    // Enqueue Tailwind CSS from CDN
    wp_enqueue_style('tailwindcss', 'https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css', array(), '3.3.2');

    // Enqueue theme main stylesheet (if needed for custom styles)
    wp_enqueue_style('big-bull-movers-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'big_bull_movers_enqueue_scripts');

// Register navigation menus
function big_bull_movers_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'big-bull-movers'),
        'footer'  => __('Footer Menu', 'big-bull-movers'),
    ));
}
add_action('after_setup_theme', 'big_bull_movers_register_menus');

// Register custom post types: Services, Testimonials, FAQs
function big_bull_movers_register_custom_post_types() {
    // Services CPT
    $labels_services = array(
        'name'               => _x('Services', 'post type general name', 'big-bull-movers'),
        'singular_name'      => _x('Service', 'post type singular name', 'big-bull-movers'),
        'menu_name'          => _x('Services', 'admin menu', 'big-bull-movers'),
        'name_admin_bar'     => _x('Service', 'add new on admin bar', 'big-bull-movers'),
        'add_new'            => _x('Add New', 'service', 'big-bull-movers'),
        'add_new_item'       => __('Add New Service', 'big-bull-movers'),
        'new_item'           => __('New Service', 'big-bull-movers'),
        'edit_item'          => __('Edit Service', 'big-bull-movers'),
        'view_item'          => __('View Service', 'big-bull-movers'),
        'all_items'          => __('All Services', 'big-bull-movers'),
        'search_items'       => __('Search Services', 'big-bull-movers'),
        'parent_item_colon'  => __('Parent Services:', 'big-bull-movers'),
        'not_found'          => __('No services found.', 'big-bull-movers'),
        'not_found_in_trash' => __('No services found in Trash.', 'big-bull-movers')
    );
    $args_services = array(
        'labels'             => $labels_services,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'services'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true,
    );
    register_post_type('service', $args_services);

    // Testimonials CPT
    $labels_testimonials = array(
        'name'               => _x('Testimonials', 'post type general name', 'big-bull-movers'),
        'singular_name'      => _x('Testimonial', 'post type singular name', 'big-bull-movers'),
        'menu_name'          => _x('Testimonials', 'admin menu', 'big-bull-movers'),
        'name_admin_bar'     => _x('Testimonial', 'add new on admin bar', 'big-bull-movers'),
        'add_new'            => _x('Add New', 'testimonial', 'big-bull-movers'),
        'add_new_item'       => __('Add New Testimonial', 'big-bull-movers'),
        'new_item'           => __('New Testimonial', 'big-bull-movers'),
        'edit_item'          => __('Edit Testimonial', 'big-bull-movers'),
        'view_item'          => __('View Testimonial', 'big-bull-movers'),
        'all_items'          => __('All Testimonials', 'big-bull-movers'),
        'search_items'       => __('Search Testimonials', 'big-bull-movers'),
        'parent_item_colon'  => __('Parent Testimonials:', 'big-bull-movers'),
        'not_found'          => __('No testimonials found.', 'big-bull-movers'),
        'not_found_in_trash' => __('No testimonials found in Trash.', 'big-bull-movers')
    );
    $args_testimonials = array(
        'labels'             => $labels_testimonials,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'testimonials'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true,
    );
    register_post_type('testimonial', $args_testimonials);

    // FAQs CPT
    $labels_faqs = array(
        'name'               => _x('FAQs', 'post type general name', 'big-bull-movers'),
        'singular_name'      => _x('FAQ', 'post type singular name', 'big-bull-movers'),
        'menu_name'          => _x('FAQs', 'admin menu', 'big-bull-movers'),
        'name_admin_bar'     => _x('FAQ', 'add new on admin bar', 'big-bull-movers'),
        'add_new'            => _x('Add New', 'faq', 'big-bull-movers'),
        'add_new_item'       => __('Add New FAQ', 'big-bull-movers'),
        'new_item'           => __('New FAQ', 'big-bull-movers'),
        'edit_item'          => __('Edit FAQ', 'big-bull-movers'),
        'view_item'          => __('View FAQ', 'big-bull-movers'),
        'all_items'          => __('All FAQs', 'big-bull-movers'),
        'search_items'       => __('Search FAQs', 'big-bull-movers'),
        'parent_item_colon'  => __('Parent FAQs:', 'big-bull-movers'),
        'not_found'          => __('No FAQs found.', 'big-bull-movers'),
        'not_found_in_trash' => __('No FAQs found in Trash.', 'big-bull-movers')
    );
    $args_faqs = array(
        'labels'             => $labels_faqs,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'faqs'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'supports'           => array('title', 'editor'),
        'show_in_rest'       => true,
    );
    register_post_type('faq', $args_faqs);
}
add_action('init', 'big_bull_movers_register_custom_post_types');
?>
