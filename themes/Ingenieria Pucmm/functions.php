<?php 


if ( ! function_exists( 'wp_bootstrap_4_scripts' ) ) :
function wp_unica_scripts() {
    $parent_style = 'parent-style'; // This is 'Awaken-style' for the Awaken theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}
endif;
add_action( 'wp_enqueue_scripts', 'wp_unica_scripts' );



/* creates navbar */
if(function_exists('register_nav_menus')){
    register_nav_menus (array('superior' => 'Menu Principal Superior'));
}


/* change navbar li item class */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('menu-item-has-children', $classes) ){
             $classes[] = 'nav-item nav-main-item dropdown';
     }
     return $classes;
}
 

/* change navbar li a class */
function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link nav-opt dropdown-toggle"', $ulclass);
 }
 add_filter('wp_nav_menu','add_menuclass');


 /* change navbar li sub-menu class */
function change_submenu_class($dropdownmenu) {  
    return preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$dropdownmenu);   
}  
add_filter('wp_nav_menu','change_submenu_class');  


/*change or add link atributtes*/
add_filter( 'nav_menu_link_attributes', 'wpse270596_add_navlink_atts', 10, 3 );
function wpse270596_add_navlink_atts( $atts, $item, $args ) {
  if (in_array('menu-item-has-children', $item->classes)) {
    $atts['role'] = 'button';
    $atts['data-toggle'] = 'dropdown';
    $atts['aria-haspopup'] = 'true';
    $atts['aria-expanded'] = 'false';
  }
return $atts;
}
















function pagination_bar() {

    global $wp_query;

 

    $total_pages = $wp_query->max_num_pages;

 

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

 

        echo paginate_links(array(

            'base' => get_pagenum_link(1) . '%_%',

            'format' => '/page/%#%',

            'current' => $current_page,

            'total' => $total_pages,

            'type' => 'list',

        ));

    }

}








function wpb_widgets_init() {
    register_sidebar( array(
        'name' => 'Header Widget',
        'id' => 'header-widget',
        'before_widget' => '<div class="hw-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="hw-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => 'HomeHeaderWidget Widget',
        'id' => 'homeheaderwidget-widget',
        'before_widget' => '<div class="hw-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="hw-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );








add_theme_support( 'post-thumbnails' );

?>