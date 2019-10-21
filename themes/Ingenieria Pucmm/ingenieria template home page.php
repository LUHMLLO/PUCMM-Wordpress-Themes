<?php 
/*
* Template Name: ingenieria template home page
*/
get_header(); ?>



   <div class="home-only-header-widget" style="margin: 0 !important;padding: 0 !important; width:100% !important;">
        <?php if ( !function_exists('dynamic_sidebar') ||
            !dynamic_sidebar('HomeHeaderWidget Widget') ) : ?>
        <?php endif; ?>     
   </div>



   



<div class="container">
  <div >



    <div id="main-row-top" class="row h-100">
        <div id="main-row-left-top" class="col-md-6">
            <div id="main-row-left-top-inner" class="h-100">

                <h3>PERFIL DEL EGRESADO</h3>
                <h2>INGENIERIA DE SISTEMAS Y COMPUTACIÓN</h2>
                <p><strong>El Ingeniero de Sistemas de Computación, a través de una rigurosa formación en los principios teóricos y matemáticos de la información y la computación, desarrolla un pensamiento computacional y un enfoque analítico de sistemas, que lo prepara para enfrentar los retos de la resolución de problemas complejos.</strong></p>
                <p>Es un profesional especializado en el desarrollo de software a nivel científico, desarrollando modelos abstractos y tecnologías que avancen las ciencias de la computación y a nivel aplicativo-profesional, conceptualizando, planificando, diseñando, implementando y administrando soluciones de sistemas intensivos en software que ataquen las necesidades de las distintas organizaciones públicas y privadas, así como de la sociedad contemporánea en general.</p>
                <p>El egresado es capaz de comunicarse de manera oral y escrita en inglés, a un nivel avanzado, lo que le permitirá un mejor desempeño de acuerdo con las demandas y necesidades del mundo globalizado, mayores oportunidades de inserción en el mercado laboral, relacionarse con personas de otras culturas, tener acceso a diferentes fuentes de información y ampliar su visión del mundo.</p>
                <a href="#">Ver Mas</a>

            </div><!---column inner-->
        </div><!---col-->
        <div id="main-row-right-top" class="col-md-6">
            <div id="main-row-right-top-inner" class="row h-100">



                <div id="main-row-left-top-inner-col-1" class="col-md-6">
                    <h3>OTRAS INGENIERIAS</h3>
                    <ul>
                        <li>SISTEMAS Y COMPUTACIÓN</li>
                        <li>TELEMÁTICA</li>
                        <li>MECATRÓNICA</li>
                        <li>ELÉCTRICA</li>
                        <li>CIVIL</li>
                    </ul>
                </div>
                <div id="main-row-left-top-inner-col-2" class="col-md-6">
                    <h3>POSTGRADO</h3>
                    <span>Septiembre 2019</span>
                </div>
                <div id="main-row-left-top-inner-col-3" class="col-md-6">
                </div>
                <div id="main-row-left-top-inner-col-4" class="col-md-6">
                        <?php echo do_shortcode("[add_eventon]"); ?>
                </div>




            </div><!---row-->
        </div><!---col-->
    </div><!----------row---------->







    <div id="main-row-middle" class="row h-100">
        <div id="map-slider" class="col-md-9 carousel slide carousel-fade" data-ride="carousel">


                <ol id="map-slider-carousel-indicators" class="carousel-indicators">
                    <li data-target="#map-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#map-slider" data-slide-to="1"></li>
                </ol>

            <div class="carousel-inner">

                <div id="map-slide-1" class="carousel-item item active">
                    <div class="map-slide row h-100">
                        <div class="map-details col-md-4">
                            <img class="map-details-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-color.png" width="80">
                          <div style="padding: 100px 48px;">
                            <h4>Campus Santiago</h4>
                            <ul>
                                <li>Autopista Duarte Km 1 1/2</li>
                                <li>Santiago, República Dominicana.</li>
                                <li>Tel.: (809) 580-1962</li>
                                <li>Fax: (809) 582-4549</li>
                            </ul>
                          </div><!--style---->
                        </div><!---mapp detials-->
                        <iframe class="map-embed col-md-8" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.182162497215!2d-70.68651258591399!3d19.44771138687569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf908e72927b%3A0xf94f2a25ae443704!2sPUCMM+Santiago!5e0!3m2!1sen!2sdo!4v1559137936072!5m2!1sen!2sdo" style="border:0">
                        </iframe>
                    </div><!---map slide-->
                </div><!---carousel item-->

                <div id="map-slide-2" class="carousel-item item">
                    <div class="map-slide row h-100">
                        <div class="map-details col-md-4">
                                <img class="map-details-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-color.png" width="80">
                          <div style="padding: 100px 48px;">
                            <h4>Campus Santo Domingo</h4>
                            <ul>
                                <li>Abraham Lincoln</li>
                                <li>esq. Simón Bolívar</li>
                                <li>Santo Domingo, Rep. Dom.</li>
                                <li>Tel.: (809) 535-0111</li>
                                <li>Fax: (809) 534-7060</li>
                            </ul>
                          </div><!--style---->
                        </div><!---mapp detials-->
                        <iframe class="map-embed col-md-8" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.4497063867448!2d-69.93160155037681!3d18.463278287380756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89df8a1700d7%3A0x2d76fbc60bc08167!2sPUCMM+Edificio+A1!5e0!3m2!1sen!2sdo!4v1559164243012!5m2!1sen!2sdo" style="border:0">
                        </iframe>
                    </div><!---map slide-->
                </div><!---carousel item-->


            
            </div><!--carousel inner-->
        </div><!----col-->



        <div id="map-posts" class="col-md-3">
            <div>
				<?php query_posts('posts_per_page=3');
					if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="article-wrapper d-flex <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                            <div class="article-date text-center w-25">
                                <span><?php echo get_the_date(d); ?></span>
                                <small><?php echo get_the_date(M); ?></small>
                            </div>
                            <div class="article-title w-75">
                               <h4><?php echo wp_trim_excerpt(get_the_title()); ?></h4>
                            </div>						
                        </a><!-- //. recent post objet-->
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>                
            </div>
        </div><!---map posts---->

    </div><!----row----main middlee-->








    <div class="row h-100 d-none d-md-flex">
        <div id="middle-carousel" class="carousel slide carousel-fade col-md-12" data-ride="carousel">

                <ol id="middle-carousel-indicators" class="carousel-indicators">
                    <li data-target="#middle-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#middle-carousel" data-slide-to="1"></li>
                </ol>


            <div id="middle-carousel-inner" class="carousel-inner">

                <div class="middle-carousel-item carousel-item active">
                    <div class="middle-carousel-item-title">
                        <h4>Campus Santiago</h4>
                        <span>CSTI</span>
                    </div><!---middle-carousel-item-title--->

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/campus-santiago.jpg">
                    <div class="middle-carousel-overlay"></div>

                    <div class="middle-carousel-item-content">
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Culpa tenetur neque quaerat debitis iusto ratione totam beatae illum ab nostrum magni, 
                          minima doloremque, iste velit rem quis corporis saepe? Suscipit!
                        </p>
                        <a href="#">Ver Mas</a>                       
                    </div><!---middle-carousel-item-content--->
                </div><!---middle-carousel-item--->


                
                <div class="middle-carousel-item carousel-item">
                        <div class="middle-carousel-item-title">
                            <h4>Campus Santo Domingo</h4>
                            <span>CSTA</span>
                        </div><!---middle-carousel-item-title--->
    
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/campus-santodomingo.jpg">
                        <div class="middle-carousel-overlay"></div>
    
                        <div class="middle-carousel-item-content">
                            <p>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                              Culpa tenetur neque quaerat debitis iusto ratione totam beatae illum ab nostrum magni, 
                              minima doloremque, iste velit rem quis corporis saepe? Suscipit!
                            </p>
                            <a href="#">Ver Mas</a>                       
                        </div><!---middle-carousel-item-content--->
                    </div><!---middle-carousel-item--->



            </div><!--middle-carousel-inner--->
        </div><!---middle-carousel--->
    </div><!---row--->









    


  </div><!---container-->
</div><!-----container-->








<?php get_footer(); ?>