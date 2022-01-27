<?php
// =======================Add Menu=======================================


add_theme_support( "title-tag" );
add_theme_support( 'custom-header' );

// =======================Register Nav Menu =======================================

// Register Nav Menu 
function devo_theme_menu() {
    register_nav_menus(
      array(
        'top-menu' => __( 'Top Menu', 'devo' ),
        'footer-menu' => __( 'Footer Menu', 'devo' )
      )
    );
  }

//   Add the hook to make the menu 
add_action( 'init', 'devo_theme_menu' );

// =======================Adding sidebar =======================================


// ======================Adding Style ===========================================

// Adding Style 
function devo_theme_loadStyle()
{
    wp_register_style( 'devo_theme_style', get_template_directory_uri() . '/assets/css/devo_theme_style.css',array(), false, 'all');
    wp_enqueue_style('devo_theme_style');
}

add_action( 'wp_enqueue_scripts', 'devo_theme_loadStyle' );

// ======================Adding Script ===========================================

function devo_theme_loadScript()
{
    // wp_register_script( 'devo_theme_jquery', 'https://code.jquery.com/jquery-3.6.0.slim.min.js',array(), false, true);
    wp_register_script( 'devo_theme_jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.slim.min.js',array(),'3.6.0', true);
    wp_register_script( 'devo_theme_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array(),'4.0.0', true);
    wp_register_script( 'devo_theme_popper', get_template_directory_uri() . '/assets/js/popper.min.js',array(),'1.0.0', true);
    
    
    wp_enqueue_script('devo_theme_jquery');

    wp_enqueue_script('devo_theme_bootstrap');
   
    
   
}


add_action( 'wp_enqueue_scripts', 'devo_theme_loadScript' );

// ==================Elementor support===================
function theme_prefix_register_elementor_locations( $elementor_theme_manager ) {

	$elementor_theme_manager->register_all_core_location();

}
add_action( 'elementor/theme/register_locations', 'theme_prefix_register_elementor_locations' );

// registering new elementor location
function devo_register_elementor_locations( $elementor_theme_manager ) {

	$elementor_theme_manager->register_location(
		'under_front_about',
		[
			'label' => esc_html__( 'Under Front ABout', 'devo' ),
			'multiple' => true,
			'edit_in_content' => true,
		]
	);

}
add_action( 'elementor/theme/register_locations', 'devo_register_elementor_locations' );

?>