<?php get_header(); ?>




    <!-- breadcrumb area start -->
    <section class="breadcumb-area breadcumb-gradient-animated">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="title">Noticias</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- blog page content area start -->
    <div class="blog-page-content-area">
        <div class="container">
            <div class="row">



                <div class="col-lg-8">
                    <div class="blog-page-content-area-inner">
                    


                    <?php if ( have_posts() ) : ?>
                    <!-- Add the pagination functions here. -->
                    
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="single-blog-post-item <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="featured-img">
                                    <?php the_post_thumbnail('banner_image'); ?>
                                    </div>
                                </a>
                            <div class="content"><!-- content  -->
                               <a href="<?php the_permalink(); ?>"> <h4 class="title"><?php the_title(); ?></h4></a>
                               <p><?php the_excerpt(); ?></p>
                            </div><!-- //.content -->
                        </article><!-- //. single blog post item-->
                            <div class="single-post-separator"></div>    
                    <?php endwhile; ?>
                    <!-- End of the main loop -->

                    <!-- Add the pagination functions here. -->

                    

                    <?php else : ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>

                        <div class="pagination">
                            
                        </div>             
                        
                        <div class="post-navigation">
                            <ul class="pagination">
                             <?php pagination_bar(); ?>
                            </ul>
                        </div>

                    
                    </div><!---blog inner area--->
                </div><!--col lg 8-->



 

                <div class="col-lg-4">
                    <aside class="sidebar"><!-- sidebar start -->
                        
                        <div class="widget-area">
                            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                                <input type="text" value="" name="s" id="s" placeholder="Buscar..." />
                            </form>
                        </div>
                        
                        <div class="widget-area category"><!-- category widget start-->
                            <div class="widget-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="widget-body"><!-- widget body -->
                               <ul class="categories"><!-- categories -->
                               <?php wp_list_cats() ?>
                               </ul> <!-- ./ cateogries -->
                            </div><!-- /. widget body -->
                        </div><!-- category widget end-->
                       
                        <div class="widget-area tags"> <!-- tag widget  start -->
                            <div class="widget-title">
                                <h4>Tags</h4>
                            </div>
                            <div class="widget-body"><!-- widget body -->
                                <ul class="tags-list"><!-- tags -->
                                <?php
                                $tags = get_tags();
                                if ( $tags ) :
                                    foreach ( $tags as $tag ) : ?>
                                        <li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </ul><!-- /.tags -->
                            </div><!-- /. widget body -->
                        </div><!-- tag widget  end -->
                    </aside><!-- sidebar end -->
                </div>
            </div>
        </div>
    </div>
    <!-- blog page content area end -->









<?php get_footer(); ?>
