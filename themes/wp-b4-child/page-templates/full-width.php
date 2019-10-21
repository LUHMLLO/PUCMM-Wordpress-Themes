<?php
/*
* Template Name: Full Width Without Container
*/

get_header(); ?>

    <div class="">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php if ( is_active_sidebar( 'banner' ) ) : ?>
                <!-- banner -->
                    <section class="banner">  
                        <?php dynamic_sidebar( 'banner' ); ?>
                    </section>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'bodybar-1' ) ) : ?>

                <!-- Bienvenidos -->
                <section class="container py-5">  
                    <?php dynamic_sidebar( 'bodybar-1' ); ?>
                </section>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'publishing' ) ) : ?>

                <!-- Estadísticas -->
                <div class="bg-unica">
                    <section class="container py-5">  
                        <?php dynamic_sidebar( 'publishing' ); ?>
                    </section>
                </div>
                <?php endif; ?>

                <!-- News -->
                <section class="container py-5">
                    <div class="row justify-content-center">
                <?php 

                $entradas = new WP_Query( 'posts_per_page=4&orderby=desc' );

                if ( $entradas ) : ?>
                    <div class="col-12">
                        <h2 class="text-uppercase display-4 text-center mb-3">News</h2>
                    </div>
                <?php endif; ?>
                <?php while ( $entradas -> have_posts() ) : $entradas -> the_post(); ?>
                    <article class="col-sm-12 col-md-6 col-lg-3 h-100 news-article mb-3" style="padding:15px !important;">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                        </a>
                        <div class="bg--light" style="padding:12px 0;">
                        <h5 class="mb-2"><a style="color: #0B444D !important;" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                        <?php strip_tags(the_excerpt());?>
                    </div>
                    </article>
                    <?php
                    //get_template_part( 'template-parts/content', 'page-full' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    /*if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;*/

                endwhile; // End of the loop.
                // Resetear Post Data 
                wp_reset_postdata();
                ?>
                    </div>
                </section>
                
                <?php if ( is_active_sidebar( 'events' ) ) : ?>
                <!-- Bienvenidos -->
                <section class="container py-5">  
                    <?php dynamic_sidebar( 'events' ); ?>
                </section>
                <?php endif; ?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

<?php
get_footer();
