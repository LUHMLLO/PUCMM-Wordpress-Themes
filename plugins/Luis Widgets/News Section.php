<?php
/**
 * @package News_Section
 * @version 1.0
 */
/*
Plugin Name: News Section
Plugin URI: http://wordpress.org/extend/plugins/#
Description: A News Viewing Plugin 
Author: Luis Melo
Version: 1.0
Author URI: http://example.com/
*/
class News_Section extends WP_Widget {

	public function __construct() {
		$widget_ops = array( 
			'classname' => 'News_Section',
			'description' => 'A News Section Plugin',
		);
		parent::__construct( 'News_Section', 'News Section', $widget_ops );
	}


	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		?>
		<div class="row">
		    <?php query_posts('posts_per_page=3');
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article style="padding: 22px !important;" class="recent-posts-object col-sm-12 col-md-4 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                        <div style="background:white !important; ">
                            <a href="<?php the_permalink(); ?>">
                                <div class="recent-post-thumbnails" style="margin:0 !important;padding:0 !important;min-width: 100% !important; width: 100% !important;max-width: 100% !important;min-height:200px !important;height:255px !important;max-height:255px !important;overflow:hidden !important;object-fit: cover !important;position: relative !important;">
                                   <?php the_post_thumbnail('luis_size'); ?>
                                </div>  
                            </a>
                            <div class="recent-post-content"><!-- content  -->
                                <a href="<?php the_permalink(); ?>" style="font-size:16px !important;"> 
                                    <h6 style="font-size:16px !important;"><?php the_title(); ?></h6>
                                </a>
                                <div style="font-size:12px !important;">
                                    <p style="font-size:12px !important;">
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                            </div><!-- //.content -->
                        </div>
                    </article><!-- //. single blog post item-->
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
		</div>
		<?php 
		
		echo $args['after_widget'];
	}


	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'text_domain' );
		?>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		<?php
		
	}


	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}



}
// register News_Section
add_action( 'widgets_init', function(){
	register_widget( 'News_Section' );
});

function show_custom_widget() {
    ob_start(); 
    the_widget( 'News_Section' ); 
    $contents = ob_get_clean(); 
    return $contents;
}
add_shortcode( 'NewsSection', 'show_custom_widget' );