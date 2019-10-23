<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>


<article class="news-column col-md-12 bg-white mb-5 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
  <div class="news-column-inner">
    
  
    <div class="news-column-image">
        <?php the_post_thumbnail(); ?>
    </div>

    <h4 class="news-column-title lead"><?php the_title(); ?></h4>

    <div class="news-column-date">
        <?php echo get_the_date(); ?>
    </div>

    <div class="news-column-content lead">
      <?php the_excerpt(); ?>
    </div>
    
    <a class="news-column-link" href="<?php the_permalink(); ?>">ver mas</a>    
  
  </div>        
</article><!-- //. single blog post item-->  