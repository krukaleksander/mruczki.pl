<?php
function reg_mymenu() {
  register_nav_menu('header-menu',__( 'Menu główne' ));
}
add_action( 'init', 'reg_mymenu');
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    }    
?>
<?php if ( function_exists('register_sidebar') ) 
register_sidebar(array( 
'before_widget' => '', 
'after_widget' => '', 
'before_title' => '<h4>', 
'after_title' => '</h4>', 
)); ?>
