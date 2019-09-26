<?php get_header(); ?>









    <!-- breadcrumb area start -->

    <section class="breadcumb-area breadcumb-gradient-animated">

    </section>

    <!-- breadcrumb area end -->





    <!-- blog page content area start -->

<section class="blog-details-content">

        <div class="container">

            <div class="row">



                <div class="col-lg-12">    

                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="single-blog-post">

                        <!-- single blog post -->

                        <div class="details-container">

                            <!-- details contaienr -->

                            <div class="post-body">

                                <!-- post body -->


                                <h3 class="title"><?php the_title(); ?></h3>
                                
                                    <div class="featured-img">

                                    <?php the_post_thumbnail('banner_image'); ?>

                                    </div>
                                <br><br>

                                <?php the_content(); ?>

                                



                                <br><br>

                                <div class="post-bottom-content">

                                    <!-- post bottom content -->

                                    <div class="top-content">

                                        <!-- top content -->

                                        <div class="left-content">

                                            <h4 class="title">Categories</h4>

                                        </div>

                                        <div class="right-content">

                                            <h4 class="title">Social Share</h4>

                                        </div>

                                    </div>

                                    <!-- //.top content -->

                                    <div class="bottom-content">

                                        <!-- bottom content -->

                                        <div class="left-content">

                                            <!-- left content -->

                                            <?php echo get_the_category_list(); ?>

                                        </div>

                                        <!-- //.left content -->

                                        <div class="right-content">

                                            <!-- right content -->

                                            <h4 class="title">Social Share</h4>

                                            <ul>

                                                <li>

                                                    <a href="#">

                                                        <i class="fab fa-facebook-f"></i>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="#">

                                                        <i class="fab fa-twitter"></i>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="#">

                                                        <i class="fab fa-typo3"></i>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="#">

                                                        <i class="fab fa-staylinked"></i>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="#">

                                                        <i class="fab fa-tumblr"></i>

                                                    </a>

                                                </li>

                                            </ul>

                                        </div>

                                        <!-- right content -->

                                    </div>

                                    <!-- //.bottom content -->

                                </div>

                                <!-- //.post bottom content -->

                            </div>

                            <!-- //.post body -->
                             <br>

                            <div class="single-post-separator"></div>

                        </div>

                    </div>

                    <?php endwhile; ?>

                </div><!--col--->





           

            </div>

        </div>

    </section>

    <!-- blog page content area end -->

















<?php get_footer(); ?>