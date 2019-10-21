<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>


<article class="custom-ingenieria-news col-md-4 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
  <div class="custom-ingenieria-news">
    
    <div class="custom-ingenieria-news-date">
        <?php echo get_the_date(); ?>
    </div>
  
    <div class="custom-ingenieria-news-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <h6 class="lead"><?php the_title(); ?></h6>
    <a href="<?php the_permalink(); ?>">ver mas</a>    
  
  </div>        
</article><!-- //. single blog post item-->  