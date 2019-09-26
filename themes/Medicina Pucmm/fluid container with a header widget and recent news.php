<?php 
/*
* Template Name: fluid container with a header widget and recent news
*/
get_header(); ?>



   <div class="home-only-header-widget">
        <?php if ( !function_exists('dynamic_sidebar') ||
            !dynamic_sidebar('HomeHeaderWidget Widget') ) : ?>
        <?php endif; ?>     
   </div>


    <div class="custom-container-fluid bg-white" style="padding-top:50px;padding-bottom:50px;">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                <div id="primary-top">
                    <?php
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', 'page-full' );             
                    endwhile; // End of the loop.
                    ?>
                    <?php wp_reset_query(); ?>
                </div>

                <div id="primary-bottom" class="row">
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

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!---contaienr---bgwhite---->



<?php get_footer(); ?>




<style>
    .recent-posts-thumbnails img{
            min-width: 100% !important;
            width: 100% !important;
            max-width: 100% !important;
            min-height: 100% !important;
            height: 100% !important;
            max-height: 100% !important;
            object-fit: cover !important;
    }
</style>