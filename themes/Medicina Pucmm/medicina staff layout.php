<?php 
/*
* Template Name: medicina staff layout
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



                <div class="custom-equipo-row">
                    <div class="row">
                            <div class="col-sm-6 col-md-6 custom-equipo-persona mb-5">
                                <div class="custom-equipo-persona-inner">
                                    <div class="custom-equipo-persona-image">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/miembros/Doctora.png" alt="">
                                    </div>
                                    <div class="custom-equipo-persona-content">
                                        <h5>Dra. Mary Anne Butler</h5>
                                        <h6>Decana de la Facultad Ciencias de la Salud</h6>
                                        <small>correo@correo.com</small>
                                    </div>
                                </div><!--custom-equipo-persona-inner--->
                            </div><!--custom-equipo-persona-col--> 
                    </div><!--row-->

                    <div class="row">
                            <div class="col-sm-6 col-md-6 custom-equipo-persona mb-5">
                                <div class="custom-equipo-persona-inner">
                                    <div class="custom-equipo-persona-image">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/miembros/DrMarcosDiaz.jpg" alt="">
                                    </div>
                                    <div class="custom-equipo-persona-content">
                                        <h5>Dr. Marcos Diaz</h5>
                                        <h6>ocupacion</h6>
                                        <small>correo@correo.com</small>
                                    </div>
                                </div><!--custom-equipo-persona-inner--->
                            </div><!--custom-equipo-persona-col-->        

                            <div class="col-sm-6 col-md-6 custom-equipo-persona mb-5">
                                <div class="custom-equipo-persona-inner">
                                    <div class="custom-equipo-persona-image">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/miembros/ClaraSantillan.jpg" alt="">
                                    </div>
                                    <div class="custom-equipo-persona-content">
                                        <h5>Dr. Marcos Diaz</h5>
                                        <h6>ocupacion</h6>
                                        <small>correo@correo.com</small>
                                    </div>
                                </div><!--custom-equipo-persona-inner--->
                            </div><!--custom-equipo-persona-col-->  
                    </div><!--row-->

                    <div class="row">
                            <div class="col-sm-6 col-md-6 custom-equipo-persona mb-5">
                                <div class="custom-equipo-persona-inner">
                                    <div class="custom-equipo-persona-image">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/miembros/LicdaKattyMarielBaduíJáquez.jpg" alt="">
                                    </div>
                                    <div class="custom-equipo-persona-content">
                                        <h5>Lic. Katty Baduí</h5>
                                        <h6>Directora del Departamento de Premédica</h6>
                                        <small>correo@correo.com</small>
                                    </div>
                                </div><!--custom-equipo-persona-inner--->
                            </div><!--custom-equipo-persona-col-->  
                    </div><!--row-->     
                </div><!-- custom-equipo-row -->




                
                <br><br>  
            </div>
        </div><!----row--->
    </div><!---container fluid--->


<?php get_footer(); ?>
