<!-- File where there are some functions that add more functionality to themes, such as the logo, menus, color, thumbnails, scripts, and stylesheets;-->
<?php



// Add Menu Support
add_theme_support('menus');


// Register Nav Menu 
function devo_theme_menu() {
    register_nav_menus(
      array(
        'top-menu' => __( 'Top Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }



//   Add the hook to make the menu 
add_action( 'init', 'devo_theme_menu' );

// Adding sidebar 
function my_custom_theme_sidebar() {
  register_sidebar( array(
      'name' => __( 'Primary Sidebar', 'my-custom-theme' ),
      'id'   => 'sidebar-1',
       'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="rounded">',
      'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'my_custom_theme_sidebar' );

// Adding Style 
function devo_theme_loadStyle()
{
    wp_register_style( 'devo_theme_style', get_template_directory_uri() . '/assets/css/devo_theme_style.css',array(), false, 'all');
    wp_enqueue_style('devo_theme_style');
}
add_action( 'wp_enqueue_scripts', 'devo_theme_loadStyle' );

?>