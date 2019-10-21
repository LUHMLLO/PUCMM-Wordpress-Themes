<?php

if ( ! function_exists( 'wp_bootstrap_4_scripts' ) ) :
function wp_unica_scripts() {
    $parent_style = 'parent-style'; // This is 'Awaken-style' for the Awaken theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));
    wp_enqueue_style('awesome_fonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css');

}
endif;
add_action( 'wp_enqueue_scripts', 'wp_unica_scripts' );

function wp_unica_widgets() {
	register_sidebar( array(
		'name'          => esc_html__( 'Topbar', 'wp-bootstrap-4' ),
		'id'            => 'topbar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<div id="%1$s" class="col-3 ml-auto mb-0 widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'TopFooter', 'wp-bootstrap-4' ),
		'id'            => 'topfooter-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<div id="%1$s" class="container text-uppercase">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="display-4">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'BodyContent', 'wp-bootstrap-4' ),
		'id'            => 'bodybar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Publishing', 'wp-bootstrap-4' ),
		'id'            => 'publishing',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5 class="display-4 text-uppercase text-center text-white">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Events', 'wp-bootstrap-4' ),
		'id'            => 'events',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="display-4 text-uppercase text-center">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Banner', 'wp-bootstrap-4' ),
		'id'            => 'banner',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="display-4 text-uppercase text-center">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'wp_unica_widgets' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
/*function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '<a class="btn btn-outline-info btn-sm ml-2" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Read More', 'textdomain' )
        );
    }
 
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );*/
