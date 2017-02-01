<?php
// Registro del menú de WordPress

add_theme_support( 'nav-menus' );

if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main' => 'Main'
        )
    );
}


//  Main Sidebar
if(function_exists('register_sidebar'))
  register_sidebar(array(
  'name' => 'Main Sidebar',
  'before_widget' => '<hr>',
  'after_widget' => '',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
));

//Habilitar thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150, 150, true);


// Permitir comentarios encadenados
function enable_threaded_comments(){
    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
       wp_enqueue_script('comment-reply');
    }
}
add_action('get_header', 'enable_threaded_comments');

//Sidebars

//Header
function header_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Header', 'your-theme-domain' ),
            'id' => 'header-widget-area',
            'description' => __( 'Header widget area', 'your-theme-domain' ),
            'before_widget' => '<div class="header-widget-area">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'header_sidebar' );

//Footer
function footer_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Footer', 'your-theme-domain' ),
            'id' => 'footer-widget-area',
            'description' => __( 'Footer widget area', 'your-theme-domain' ),
            'before_widget' => '<div class="footer-widget-area">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'footer_sidebar' );

//Sidebar Sidebar
function the_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Regular Sidebar', 'your-theme-domain' ),
            'id' => 'regular-sidebar',
            'description' => __( '', 'your-theme-domain' ),
            'before_widget' => '<div class="regular-sidebar">',
            'after_widget' => "</div><hr>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'the_sidebar' );


?>
