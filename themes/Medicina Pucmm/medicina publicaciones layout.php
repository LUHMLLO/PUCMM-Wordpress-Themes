<?php 
/*
* Template Name: medicina publicaciones layout
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
            <p>
            Es el medio oficial de difusión que utiliza la Escuela de Medicina de la Pontifica Universidad Católica Madre y Maestra, para dar a conocer los trabajos de investigación realizados por sus estudiantes y/o personal docente, así como también las investigaciones llevadas a cabo en otras universidades o instituciones nacionales e internacionales. Esta revista es electrónica, publicada de forma bianual y se encuentra indexada en Latindex. Además, es arbitrada por el sistema de revisión por pares.
            </p>
            <br>
                <div class="row custom-alianza-row">

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 7, Núm. 2 (2017).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/AMP-V7N2.jpg">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 7 Num.2 (2017)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 7, Núm. 1 (2017).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/AMP-V7N1.jpg">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 7, Núm. 1 (2017)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 6, Núm. 2 (2016).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/AMP-V6N2.jpg">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 6, Núm. 2 (2016)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 6, Núm. 1 (2016).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Volumen 6 Número 1 Año 2016.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 6, Núm. 1 (2016)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 5, Núm. 2 (2015).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/AMP-V5N2.jpg">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 5, Núm. 2 (2015)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 5, Núm. 1 (2015).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Revista 9.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 5, Núm. 1 (2015)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 4, Núm. 2 (2014).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Revista 8.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 4, Núm. 2 (2014)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 4, Núm. 1 (2014).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Revista 7.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 4, Núm. 1 (2014)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 3, Núm. 2 (2013).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Revista 6.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 3, Núm. 2 (2013)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 3, Núm. 1 (2013).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Revista 5.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 3, Núm. 1 (2013)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 2, Núm. 2 (2011).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Revista 4.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 2, Núm. 2 (2011)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 1 Núm. 3 (2010).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Revista 3.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 1 Núm. 3 (2010)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 1, Núm. 2 (2009).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                   <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Revista 2.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 1, Núm. 2 (2009)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Vol. 1, Núm. 1 (2009).pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/1Revista.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Vol. 1, Núm. 1 (2009)</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->

                    <div class="col-md-3 col-lg-3 mb-3">
                        <a class="portfolio-item mx-auto" href="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Guía para Autores.pdf">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-file-pdf fa-2x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pdfs/Guía para Autores.png">
                        </a>
                        <div class="portfolio-item-caption-name">
                            <h5 class="lead d-none d-sm-none d-md-block text-center text-align-center">Guía para Autores</h5>
                        </div>
                    </div><!---col-md-3 col-lg-3 mb-3--->


                </div><!-- row -->
                <br><br>  
            </div><!---col-sm-12-col-md-9-->
        </div><!----row--->
    </div><!---container fluid--->


<?php get_footer(); ?>
