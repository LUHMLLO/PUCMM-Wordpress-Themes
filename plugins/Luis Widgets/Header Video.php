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
		   <video autoplay="autoplay" muted="muted" loop="loop" playsinline="playsinline" src="http://medicina.pucmm.edu.do/Portals/0-System/Skins/Bootstrap%204%20Instant/Video/medicina2.mp4"></video>
		   <div class="header-video-overlay-wrapper">
		      <h1>Conoce la Escuela</h1>
		   </div>
		</div>
		<style>
		  .header-video-wrapper{
			  min-width:100%;
			  width:100%;
			  max-width:100%;
			  height:400px;
			  overflow:hidden;
			  object-fit: cover;
			  position:relative;
		  }
		  .header-video-wrapper video{
			  min-width:100%;
			  width:100%;
			  max-width:100%;
			  object-fit: cover;
		  }
		  .header-video-overlay-wrapper{
			  background: rgb(14, 120, 193, 0.55);
			  min-width:100%;
			  width:100%;
			  max-width:100%;
			  min-height:100%;
			  height:100%;
			  max-height:100%;

			  position:absolute;
			  top:0;
			  left:0;
			  bottom:0;
			  right:0;
			  margin:auto !important;

			  display:flex;
			  justify-content:center;
			  align-content:center;
			  flex-direction:column;
		  }
		  .header-video-overlay-wrapper h1{
			  margin:auto !important;
			  color:white !important;
			  font-size:72px !important;
			  font-weight:bold;
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