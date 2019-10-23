<?php 
/*
* Template Name: medicina proyectos layout
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




                <div class="row custom-proyecto-row">

                    <div class="custom-proyecto-col col-md-6 col-lg-6 mb-5">
                        <h6>Modelo experimental en ratas para el estudio del daño renal, cardiovascular y pulmonar del humo de tercera mano en comparación con los grupos de control negativo y positivo.</h6>
                        <p>Zahíra Quiñones</p>
                        <small>zquinones@pucmm.edu.do</small>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="custom-proyecto-col col-md-6 col-lg-6 mb-5">
                        <h6>Factores cardiometabólicos, cerebrales y genéticos y su relación con las funciones neurocognitivas y la depresión en los ancianos (estudio CEGENED).</h6>
                        <p>Martín Medrano</p>
                        <small>ma.medrano@ce.pucmm.edu.do</small>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="custom-proyecto-col col-md-6 col-lg-6 mb-5">
                        <h6>Aloinjertos de piel versus xenoinjertos como predictores del tiempo de reepitelización en pacientes con quemaduras tipo AB tratadas en la unidad de niños quemados Dra. Thelma Rosario.</h6>
                        <p>Cinthia Núñez</p>
                        <small>cm.nunez@ce.pucmm.edu.do</small>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="custom-proyecto-col col-md-6 col-lg-6 mb-5">
                        <h6>Eliminación de depósitos amiloides corticales mediante terapia hipertérmica magnética utilizando grafeno y nanopartículas de FE3O4 biofuncionalizadas en un modelo de ratón alzheimer transgénico.</h6>
                        <p>María del Mar Pacheco</p>
                        <small>mpacheco@pucmm.edu.do</small>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="custom-proyecto-col col-md-6 col-lg-6 mb-5">
                        <h6>Diseño y desarrollo de dispositivos médicos para la prevención de úlceras por presión y espasticidad en pacientes encamados.</h6>
                        <p>Martín Medrano y Carlos Pantaleón</p>
                        <small>ma.medrano@ce.pucmm.edu.do</small>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="custom-proyecto-col col-md-6 col-lg-6 mb-5">
                        <h6>Enfermedad del hígado graso no alcohólico y su influencia en las funciones neurocognitivas (estudio HIGA-COGNI).</h6>
                        <p>Martín Medrano</p>
                        <small>ma.medrano@ce.pucmm.edu.do</small>
                    </div><!---col-md-4 col-lg-4 mb-3--->

                    <div class="custom-proyecto-col col-md-6 col-lg-6 mb-5">
                        <h6>Eficacia terapéutica de la neurorehabilitación como coadyuvante de la cobertura temprana con tejido laminar en la mejora de la respuesta morfológica y funcional de pacientes pediátricos con quemaduras por electricidad.</h6>
                        <p>Renata Quintana</p>
                        <small>rj.quintana@ce.pucmm.edu.do</small>
                    </div><!---col-md-4 col-lg-4 mb-3--->


                </div><!-- row -->




                
                <br><br>  
            </div>
        </div><!----row--->
    </div><!---container fluid--->


<?php get_footer(); ?>
