<?php 
/*
* Template Name: fluid container with a header widget
*/
get_header(); ?>



    <div class="container bg-white pt-5 pb-5">
        <div class="container-fluid">
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


    <div class="container bg-white mt-5 mb-5" style="padding: 0 !important;">
        <div class="row recent-news-row">
            <div class="col-md-12 mt-2" style="padding:10px !important; margin-bottom:-10px !important;">
                <h4>Noticias Recientes</h4>
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