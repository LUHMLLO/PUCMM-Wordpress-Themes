<?php 
/*
* Template Name: medicina campus layout
*/
get_header(); ?>


    <div class="container bg-white" style="padding: 45px 0 60px 0 !important;">
        <div class="top-breadcrumb-container">
        <?php custom_breadcrumbs(); ?>
        </div>
                        
        <div class="row row-reverse-mobile">
            <div class="col-md-3 col-sm-12">
                <div class="secondary-navigation-bar-implementation">
                    <?php if ( is_page() ) { ?>

                    <?php
                    if($post->post_parent)
                    $children = wp_list_pages('title_li=&child_of='.$post->post_parent.'&echo=0'); else
                    $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
                    if ($children) { ?>

                    <ul>
                        <?php echo $children; ?>
                    </ul>

                    <?php } } ?>
                </div>
            </div>

            <div class="col-sm-12 col-md-9 fluid-container-with-left-sidebar">
            <h1 class="page-layout-title"><?php wp_title('');?></h1>


                
               <div class="row">
                   <a href="#" class="col-md-6 campus-buttons">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/campus/santiago.jpg" alt="">
                       <span><p>Santiago<br>CSTI</p></span>
                    </a>
                   <a href="#" class="col-md-6 campus-buttons">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/campus/santodomingo.jpg" alt="">
                       <span><p>Santo Domingo<br>CSTI</p></span>
                    </a>
               </div>
           



                
                <br><br>  
            </div>
        </div><!----row--->
    </div><!---container fluid--->


<?php get_footer(); ?>
