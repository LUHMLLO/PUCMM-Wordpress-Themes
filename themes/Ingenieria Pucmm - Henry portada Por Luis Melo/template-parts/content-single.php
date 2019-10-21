<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>


<article class="custom-ingenieria-news-detailed col-md-12 <?php post_class(); ?>" id="post-<?php the_ID(); ?>" style="padding:10px; !important">
  <div class="custom-ingenieria-news-detailed-inner">
          
  
    <div class="custom-ingenieria-news-detailed-breadcrumbs">
      <?php custom_breadcrumbs(); ?>
    </div>

    <div class="custom-ingenieria-news-detailed-image">
        <?php the_post_thumbnail(); ?>
    </div>

    <div class="custom-ingenieria-news-detailed-title">
      <h2><?php the_title(); ?></h2> 
      <div class="custom-ingenieria-news-detailed-title-info">
        <span><?php the_author(); ?></span>
        <span><?php echo get_the_date(); ?></span>
      </div>
    </div>

    <?php the_content(); ?>
  
  </div>        
</article><!-- //. single blog post item-->  