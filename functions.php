<?php

function addCustomThemeFiles_LarissaCaseyCMS(){
    wp_enqueue_style('bootstrapCSS_LarissaCaseyCMS', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');

    wp_enqueue_style('bootstrapCSS_LarissaCaseyCMS', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');

    wp_enqueue_style('customCSS_LarissaCaseyCMS', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.2', 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapJS_LarissaCaseyCMS', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
    wp_enqueue_script('customJS_LarissaCaseyCMS', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.2', true );
};
add_action('wp_enqueue_scripts', 'addCustomThemeFiles_LarissaCaseyCMS');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function addCustomMenus_1902(){
    add_theme_support('menus');
    register_nav_menu( 'top_nav', __( 'Navigation Bar located at the top of each page.', 'LarissaCaseyCMS' ));
    register_nav_menu('bottom_Nav', __('Navigation which will be located at on the bottom of each page', 'LarissaCaseyCMS'));
}
add_action('after_setup_theme', 'addCustomMenus_1902');



register_default_headers( array(
    'defaultImage' => array(
        'url'           => get_template_directory_uri() . '/assets/img/lions_grass.jpegg',
        'thumbnail_url' => get_template_directory_uri() . '/assets/img/lions_grass.jpeg',
        'description'   => __( 'The default image for the custom header.', 'LCCMS' )
    )
) );
$customHeaderDefaults = array(
    'width' => 1280,
    'height' => 720,
    'default-image' => get_template_directory_uri() . '/assets/img/lions_grass.jpeg'
);
add_theme_support('custom-header', $customHeaderDefaults);





require_once get_template_directory() . '/inc/customizer.php';

require get_parent_theme_file_path('./addons/educational_alert.php');
