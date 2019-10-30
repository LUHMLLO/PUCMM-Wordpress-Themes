<?php 
/*
* Template Name: medicina alianzas layout
*/
get_header(); ?>


    <div class="container bg-white" style="padding: 45px 45px 60px 45px !important;">
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

            <div class="col-sm-12 col-md-9">
            <h1 class="page-layout-title"><?php wp_title('');?></h1>




                <div class="row custom-alianza-row">

                    <div class="col-md-4 col-lg-4 mb-3">
                        <a class="portfolio-item mx-auto" href="https://www.hs-furtwangen.de/">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-external-link-alt fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alianzas/hochschule-furtwangen-university-furtwangen-germany.jpg">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Hochschule Furtwangen University</h5>
                        </div>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="col-md-4 col-lg-4 mb-3">
                        <a class="portfolio-item mx-auto" href="https://www.parisdescartes.fr">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-external-link-alt fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alianzas/logo_descartes.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Universidad París-Descartes</h5>
                        </div>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="col-md-4 col-lg-4 mb-3">
                        <a class="portfolio-item mx-auto" href="https://www.nyu.edu">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-external-link-alt fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alianzas/NYU.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">New York University (NYU)</h5>
                        </div>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="col-md-4 col-lg-4 mb-3">
                        <a class="portfolio-item mx-auto" href="https://www.ces.edu.co">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-external-link-alt fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alianzas/logo-universidad-ces_5099976363.jpg">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Universidad CES</h5>
                        </div>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="col-md-4 col-lg-4 mb-3">
                        <a class="portfolio-item mx-auto" href="https://www.butler.edu">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-external-link-alt fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alianzas/1200px-Butler_University_seal.svg.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Butler University</h5>
                        </div>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="col-md-4 col-lg-4 mb-3">
                        <a class="portfolio-item mx-auto" href="https://www.liberty.edu">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-external-link-alt fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alianzas/1200px-Liberty_University_seal.svg.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Liberty University</h5>
                        </div>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="col-md-4 col-lg-4 mb-3">
                        <a class="portfolio-item mx-auto" href="https://www.hotcourseslatinoamerica.com/study/us-usa/school-college-university/depaul-university/72023/international.html">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-external-link-alt fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alianzas/depaul.jpg">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">DePaul University</h5>
                        </div>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="col-md-4 col-lg-4 mb-3">
                        <a class="portfolio-item mx-auto" href="https://unige.it">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-external-link-alt fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alianzas/unigue-italia-universitty.svg">
                        </a>
                        <div class="portfolio-item-caption-name align-content-center justify-content-center text-center text-align-center">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Universidad de Génova</h5>
                        </div>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="col-md-4 col-lg-4 mb-3">
                        <a class="portfolio-item mx-auto" href="https://www.rochester.edu">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-external-link-alt fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alianzas/UR-header-logo.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Rochester University</h5>
                        </div>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="col-md-4 col-lg-4 mb-3">
                        <a class="portfolio-item mx-auto" href="https://www.columbia.edu">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-external-link-alt fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alianzas/columbia-university.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Columbia University</h5>
                        </div>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="col-md-4 col-lg-4 mb-3">
                        <a class="portfolio-item mx-auto" href="https://www.vcu.edu">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-external-link-alt fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alianzas/vcu-seal-large.svg">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Virginia Commonwealth University</h5>
                        </div>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="col-md-4 col-lg-4 mb-3">
                        <a class="portfolio-item mx-auto" href="https://www.rutgers.edu">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-external-link-alt fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alianzas/Rutgers-University-Logo.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Rutgers University</h5>
                        </div>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="col-md-4 col-lg-4 mb-3">
                        <a class="portfolio-item mx-auto" href="https://www.creighton.edu">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-external-link-alt fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alianzas/creiton-university.jpeg">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Creighton University</h5>
                        </div>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                </div><!-- row -->




                
                <br><br>  
            </div>
        </div><!----row--->
    </div><!---container fluid--->


<?php get_footer(); ?>
