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
		<div class="recent-news-widget-plugin">
		<h3>Noticias</h3>
			<div class="row" style="overflow:hidden !important; margin:auto !important; max-width:99% !important;">
				<?php query_posts('posts_per_page=3');
					if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="recent-posts-object col-sm-12 col-md-4 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
							<div class="recent-posts-object-inner">
								<a href="<?php the_permalink(); ?>">
									<div class="recent-post-thumbnails">
									<?php the_post_thumbnail('luis_size');?>
									</div>  
								</a>
								<div class="recent-post-content"><!-- content  -->
									<a href="<?php the_permalink(); ?>"> 
										<h6><?php the_title(); ?></h6>
									</a>
									<div class="recent-posts-content-text">
											<?php the_excerpt(); ?>
									</div>
								</div><!-- //.content -->
							</div><!---recent post objet inner--->
						</article><!-- //. recent post objet-->
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div><!---recent-news-widget-plugin--->

		<style>
		  .recent-news-widget-plugin{
			background:#F8F9FA;
			padding: 10px 0;
			  overflow: hidden !important;
			  box-sizing:border-box !important;
		  }
		  .recent-news-widget-plugin h3{
			  padding: 5px 15px 0 15px !important;
		  }
		  .recent-posts-object{
			  margin:0px !important;
			  padding:10px !important;
			  min-height:450px !important;
			  height:auto !important;
			  max-height:550px !important;
		  }
		  .recent-posts-object-inner{
			background:white;
			  overflow: hidden !important;
			  min-height:100% !important;
			  height:100% !important;
			  max-height:100% !important;
		  }
		  .recent-post-thumbnails{
			margin:0 0 5px 0!important;
			padding:0 !important;
			min-width: 100% !important; 
			width: 100% !important;
			max-width: 100% !important;
			min-height:200px !important;
			height:255px !important;
			max-height:255px !important;
			overflow:hidden !important;
			object-fit: cover !important;
			position: relative !important;
		  }
		  .recent-post-thumbnails img{
			  position:absolute !important;
			  top:0;
			  right:0;
			  bottom:0;
			  left:0;
			  margin:auto !important;
			  min-width:100%;
			  max-width:100%;
			  min-height:100%;
			  max-height:100%;
			  object-fit:cover !important;
		  }
		  .recent-post-content{
			  padding:10px 15px 15px 15px !important;
		  }
		  .recent-post-content a{
			  margin: 0 !important;
			  padding: 0 !important;
			  font-size:16px !important;
			  text-decoration:none !important;
			  text-transform:uppercase !important;
		  }
		  .recent-posts-content-text{
			  margin: 0 !important;
			  padding: 0 !important;
			  font-size:12px !important;			  
		  }
		</style>
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


function ld_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'ld_custom_excerpt_length', 999 );
