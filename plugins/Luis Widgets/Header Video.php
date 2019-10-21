<?php
/**
 * @package Header_Video
 * @version 1.0
 */
/*
Plugin Name: Header Video
Plugin URI: http://wordpress.org/extend/plugins/#
Description: A Header Video Plugin 
Author: Luis Melo
Version: 1.0
Author URI: http://example.com/
*/
class Header_Video extends WP_Widget {

	public function __construct() {
		$widget_ops = array( 
			'classname' => 'Header_Video',
			'description' => 'A Header Video Plugin',
		);
		parent::__construct( 'Header_Video', 'Header Video', $widget_ops );
	}


	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		?>
		<div class="header-video-wrapper">
		   <video  width="100%" autoplay="autoplay" muted="muted" loop="loop" playsinline="playsinline">
		     <source src="https://pucmm.edu.do/Documents/medicina2.mp4">
		   </video>
		</div>
		<style>
		  .header-video-wrapper{
			  min-width:100%;
			  width:100%;
			  max-width:100%;
			  height:400px !important;
			  max-height: 400px !important;
			  overflow:hidden !important;
			  position:relative !important;
			  background: none;
			  object-fit: cover !important;
		  }
		  .header-video-wrapper video{
			  position:absolute;
			  top:0;
			  right:0;
			  bottom:0;
			  left:0;
			  margin:auto !important;			  
			  min-width:100% !important;
			  width:100% !important;
			  max-width:100% !important;
			  min-height:100%;
			  object-fit: cover !important;
			  padding: 0 !important;
		  }
		  .header-video-wrapper video > source{
			  margin:auto !important;			  
			  min-width:100% !important;
			  width:100% !important;
			  max-width:100% !important;
			  min-height:100%;
			  height:100%;
			  max-height:100%;
			  object-fit: cover !important;
			  padding: 0 !important;
		  }
		  .header-video-wrapper::before{
			  
			  display:block;
			  content: '';

			  z-index:1;
			  position:absolute;
			  top:0;
			  right:0;
			  bottom:0;
			  left:0;
			  margin:auto !important;

			  background: rgba(0, 0, 0, 0.55);
			  opacity:0.6;
			  min-width:100%;
			  width:100%;
			  max-width:100%;
			  min-height:100%;
			  height:100%;
			  max-height:100%;
		  }
		  .header-video-wrapper::after{
			  display:block;
			  content: 'Conoce la escuela';

			  z-index:2;
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  transform:translate(-50%,-50%);
			  margin: auto auto !important;

			  color:white !important;
			  font-size:72px !important;
			  font-weight:bold;
			  text-align:center;
		  }
		  @media(max-width:991px){
			  .header-video-wrapper::after{
				  font-size:55px !important;
			  }
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
// register Header_Video
add_action( 'widgets_init', function(){
	register_widget( 'Header_Video' );
});