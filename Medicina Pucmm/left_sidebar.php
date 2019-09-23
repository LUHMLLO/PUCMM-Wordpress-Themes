<?php 
/*
* Template Name: fluid container with left sidebar
*/
get_header(); ?>


<div class="container-fluid">
<div class="container-fluid">
<div class="container-fluid">
    <div class="container-fluid bg-white" style="padding: 45px 45px 60px 45px !important;">
        <div class="top-breadcrumb-container">
        <?php custom_breadcrumbs(); ?>
        </div>
                        
        <div class="row row-reverse-mobile">
            <div class="col-md-3 col-sm-12">
                <div class="secondary-navigation-bar-implementation">
                    <?php if ( !function_exists('dynamic_sidebar') ||
                    !dynamic_sidebar('LeftSidebar Widget') ) : ?>
                    <?php endif; ?>            
                </div>
            </div>

            <div class="col-sm-12 col-md-9">
                <?php
                while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'page-full' );
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                comments_template();
                endif;
                endwhile; // End of the loop.
                ?>   
                
                <br><br>  
            </div>
        </div><!----row--->
    </div><!---container fluid--->
</div>
</div>
</div>
<?php get_footer(); ?>
