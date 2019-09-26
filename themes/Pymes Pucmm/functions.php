<?php 







if(function_exists('register_nav_menus')){

    register_nav_menus (array('superior' => 'Menu Principal Superior'));

}

add_filter('.nav_menu_link_attributes','clase_menu_invento',10,3);

function clase_menu_invento ($atts,$item,$args){

    $class = 'nav-link';

    $atts['class'] = $class;

    return $atts;

}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {

    if (in_array('current-menu-item', $classes) ){

        $classes[] = 'active-actual-page ';

    }

    return $classes;

}






function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu sub-menu" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class');  











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

















add_theme_support( 'post-thumbnails' );

?>