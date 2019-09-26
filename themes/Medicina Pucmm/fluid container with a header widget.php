<?php 
/*
* Template Name: fluid container with a header widget
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

                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page-full' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>




<?php get_footer(); ?>