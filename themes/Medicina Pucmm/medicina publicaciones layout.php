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




                <div class="row custom-equipo-row">
                        <div class="col-md-6 custom-equipo-persona mb-5">
                            <div class="custom-equipo-persona-inner">
                                <img src="https://cdn.dribbble.com/users/89889/screenshots/4591352/gradienttool-dribbble.jpg" alt="">
                                <h5>Dra. Mary Anne Butler</h5>
                                <h6>Decana de la Facultad Ciencias de la Salud</h6>
                                <small>telefono</small>
                                <small>correo@correo.com</small>
                            </div><!--custom-equipo-persona-inner--->
                        </div><!--custom-equipo-persona-col-->                         
                        <div class="col-md-6 custom-equipo-persona mb-5">
                            <div class="custom-equipo-persona-inner">
                                <img src="https://cdn.dribbble.com/users/89889/screenshots/4591352/gradienttool-dribbble.jpg" alt="">
                                <h5>Lic. Katty Baduí</h5>
                                <h6>Directora del Departamento de Premédica</h6>
                                <small>telefono</small>
                                <small>correo@correo.com</small>
                            </div><!--custom-equipo-persona-inner--->
                        </div><!--custom-equipo-persona-col-->                         
                        <div class="col-md-6 custom-equipo-persona mb-5">
                            <div class="custom-equipo-persona-inner">
                                <img src="https://cdn.dribbble.com/users/89889/screenshots/4591352/gradienttool-dribbble.jpg" alt="">
                                <h5>Dra. Michelle Jiménez</h5>
                                <h6>Directora de la Escuela de Medicina</h6>
                                <small>telefono</small>
                                <small>correo@correo.com</small>
                            </div><!--custom-equipo-persona-inner--->
                        </div><!--custom-equipo-persona-col-->               
                        <div class="col-md-6 custom-equipo-persona mb-5">
                            <div class="custom-equipo-persona-inner">
                                <img src="https://cdn.dribbble.com/users/89889/screenshots/4591352/gradienttool-dribbble.jpg" alt="">
                                <h5>Dr. Nelson Martínez</h5>
                                <h6>Coordinador de la carrera de Medicina</h6>
                                <small>telefono</small>
                                <small>correo@correo.com</small>
                            </div><!--custom-equipo-persona-inner--->
                        </div><!--custom-equipo-persona-col-->
                </div><!-- row -->




                
                <br><br>  
            </div>
        </div><!----row--->
    </div><!---container fluid--->


<?php get_footer(); ?>
