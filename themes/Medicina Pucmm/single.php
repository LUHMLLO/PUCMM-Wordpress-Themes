<?php 
/*
* Template Name: fluid container with a header widget
*/
get_header(); ?>



    <div class="custom-container-fluid bg-white" style="padding-top:50px;padding-bottom:50px;">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
            <?php while ( have_posts() ) : the_post(); ?> 
           
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="post-image-show">
                    <?php the_post_thumbnail('banner_image'); ?>
                    </div>
                </div>

                <div class="post-details col-md-7 col-sm-12">
                      <div class="related-recent-news-single-post-view">
                        <h4 style="padding:10px 12px 0 12px;margin:0 0;">Noticias Recientes</h4>
                          <div class="row" style="overflow:hidden !important; margin:auto !important; max-width:99% !important;">
                                <?php query_posts('posts_per_page=3');
                                if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <article class="related-recent-news-posts-object col-md-4 col-sm-4 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                                        <div class="related-recent-news-posts-object-inner">
                                            <div class="related-recent-post-thumbnails">
                                                <?php the_post_thumbnail('luis_size');?>
                                            </div>  
                                            <div class="related-recent-news-post-content"><!-- content  -->
                                              <a href="<?php the_permalink(); ?>"> 
                                                <?php the_title(); ?>
                                              </a>
                                            </div><!-- //.content -->
                                        </div><!---recent post objet inner--->
                                    </article><!-- //. recent post objet-->
                                <?php endwhile; endif; ?>
                                <?php wp_reset_query(); ?>
                          </div>
                      </div>
                </div><!---post details--->

                <div class="col-md-12 col-sm-12">
                  
                <h2><?php the_title(); ?></h2>
                <span><?php the_date(); ?></span>
                <br><br>
                
                  <?php the_content(); ?>
                </div>
            
            </div>

            <?php endwhile; ?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>



<?php get_footer(); ?>