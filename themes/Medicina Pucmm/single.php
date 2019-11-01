<?php 
/*
* Template Name: fluid container with a header widget
*/
get_header(); ?>



    <div class="container bg-light pl-0 pr-0 pt-5 pb-5 fluid-container-with-left-sidebar">
        <div class="container-fluid p-0">
        
            <?php while ( have_posts() ) : the_post(); ?> 
                
                <div class="post-thumbnail-single">
                    <?php the_post_thumbnail(); ?>
                </div><!--post-thumbnail-single-->
                            
                <h2 class="post-title-single mt-3 mb-2"><?php the_title(); ?></h2>
                <h5 class="post-date-single mb-4"><?php the_date(); ?></h5>

                <div class="post-content-single">
                   <?php the_content(); ?>  
                </div>

            <?php endwhile; ?>
        </div><!---container fluid--->
    </div><!---container--->


    <div class="container bg-light mt-5 mb-5" style="padding: 0 !important;">
        <div class="row recent-news-row">
            <div class="col-md-12 mt-2 fluid-container-with-left-sidebar" style="padding:0 10px 10px 10px !important; margin-top:-10px !important;margin-bottom:-10px !important;">
                <h3>Noticias Recientes</h3>
            </div>
                <?php query_posts('posts_per_page=3');
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                       
                          <article class="recent-news-col col-md-4 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                            <div class="recent-news-col-inner">
                                <div class="recent-news-col-thumbnail">
                                    <?php the_post_thumbnail();?>
                                </div>  

                                <div class="recent-news-col-content"> 
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div><!--recent news col inner--->
                          </article><!--article-->

                    <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>

        </div><!--row-->
    </div><!---post details--->    


<?php get_footer(); ?>