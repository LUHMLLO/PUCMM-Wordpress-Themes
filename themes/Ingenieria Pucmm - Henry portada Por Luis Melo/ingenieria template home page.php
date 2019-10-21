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


    <div class="container bg-white" style="padding-top:0px;padding-bottom:50px;">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                


<div class="flexbox-wrapper">
        <div class="flexbox-cell w-100 flexbox-content">
            <h3>Perfil del Egresado</h3>
            <h2>Ingenieria de Sistemas y Computación</h2>
            <p>
                <strong>
                    El Ingeniero de Sistemas de Computación,
                    a través de una rigurosa formación en los
                    principios teóricos y matemáticos de la
                    información y la computación, desarrolla un
                    pensamiento computacional y un enfoque analítico
                    de sistemas, que lo prepara para enfrentar los
                    retos de la resolución de problemas complejos.
                </strong>
            </p>
            <p>
                Es un profesional especializado en el desarrollo de
                software a nivel científico, desarrollando modelos
                abstractos y tecnologías que avancen las ciencias de
                la computación y a nivel aplicativo-profesional,
                conceptualizando, planificando, diseñando, implementando
                y administrando soluciones de sistemas intensivos en
                software que ataquen las necesidades de las distintas
                organizaciones públicas y privadas, así como de la
                sociedad contemporánea en general.
            </p>
            <p>
                El egresado es capaz de comunicarse de manera oral y escrita
                en inglés, a un nivel avanzado, lo que le permitirá un mejor
                desempeño de acuerdo con las demandas y necesidades del mundo
                globalizado, mayores oportunidades de inserción en el mercado
                laboral, relacionarse con personas de otras culturas, tener
                acceso a diferentes fuentes de información y ampliar su visión del mundo.
            </p>
            <a class="btn-action btn-color" href="#">Ver más</a>
        </div>
        <div class="flexbox-cell w-100">
            <div class="flexbox-rowcell w-100">
                <div class="flexbox-subcell w-50 flexbox-list">
                    <div class="flexbox-list-info">
                        <h3>Otras Ingenierias</h3>
                        <ul>
                            <li><a href="#">Sistemas y Computación</a></li>
                            <li><a href="#">Telemática</a></li>
                            <li><a href="#">Mecatrónica</a></li>
                            <li><a href="#">Eléctrica</a></li>
                            <li><a href="#">Civil</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flexbox-subcell w-50 flexbox-emphasis">
                    <a class="flexbox-emphasis-info" href="#">
                        <div>
                            <h3>Postgrado</h3>
                            <span>Septiembre 2019</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flexbox-rowcell w-100">
                <div class="flexbox-subcell w-50 flexbox-img"></div>
                <div class="flexbox-subcell w-50 flexbox-events">
                    <div class="flexbox-events">
                        <a class="title-emphasis" href="#">
                            <span>Próximos Eventos</span>
                            <i>+</i>
                        </a>
                        <div class="flexbox-box-events">

                            <?php echo do_shortcode("[add_eventon]"); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>













    <div class="map-wrapper">
        <div class="map-item">
            <div class="bd-example">
                <div id="carouselMap" class="carousel slide carousel-fade" data-interval="false" data-ride="carousel">
                    <ol class="carousel-indicators carousel-map">
                        <li data-target="#carouselMap" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselMap" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="map-item-wrapper">
                                <div class="map-item-info">
                                    <h4>Campus Santiago</h4>
                                    <ul>
                                        <li>Autopista Duarte Km 1 1/2</li>
                                        <li>Santiago, República Dominicana.</li>
                                        <li>Tel.: (809) 580-1962</li>
                                        <li>Fax: (809) 582-4549</li>
                                    </ul>
                                    <a href="#" class="btn-action">Ver más</a>
                                </div>
                                <iframe class="map-embed" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.182162497215!2d-70.68651258591399!3d19.44771138687569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf908e72927b%3A0xf94f2a25ae443704!2sPUCMM+Santiago!5e0!3m2!1sen!2sdo!4v1559137936072!5m2!1sen!2sdo" style="border:0"></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="map-item-wrapper">
                                <div class="map-item-info">
                                    <h4>Campus Santo Domingo</h4>
                                    <ul>
                                        <li>Abraham Lincoln</li>
                                        <li>esq. Simón Bolívar</li>
                                        <li>Santo Domingo, Rep. Dom.</li>
                                        <li>Tel.: (809) 535-0111</li>
                                        <li>Fax: (809) 534-7060</li>
                                    </ul>
                                </div>
                                <iframe class="map-embed" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.4497063867448!2d-69.93160155037681!3d18.463278287380756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89df8a1700d7%3A0x2d76fbc60bc08167!2sPUCMM+Edificio+A1!5e0!3m2!1sen!2sdo!4v1559164243012!5m2!1sen!2sdo" style="border:0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-article">
            <a class="title-emphasis" href="#">
                <span>Artículos/Noticias</span>
                <i>+</i>
            </a>
            <div class="article-row">
                <div>

				<?php query_posts('posts_per_page=3');
					if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="article-wrapper d-flex <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                            <div class="article-date text-center- w-25">
                                <?php echo get_the_date(); ?>
                            </div>
                            <div class="article-title w-75">
                               <h4><?php the_title(); ?></h4>
                            </div>						
                        </a><!-- //. recent post objet-->
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>

                </div>
            </div>
        </div>
    </div>















    <div id="carouselCampus" class="carousel slide d-none d-md-block" data-interval="false" data-ride="carousel">
            <div class="carousel-campus-caption">
                <ol class="carousel-indicators">
                    <li data-target="#carouselCampus" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselCampus" data-slide-to="1" class=""></li>
                </ol>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-title-wrapper">
                        <div class="carousel-campus-title">
                            <h4 style="font-size:32px !important;">Campus<br>Santiago</h4>
                            <h6>CSTI</h6>
                        </div>
                    </div>
                    <div class="carousel-caption-wrapper">
                        <div class="carousel-caption-item">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit. Donec odio. Quisque volutpat
                                mattis eros. Nullam malesuada erat ut turpis.
                                Suspendisse urna nibh, viverra non, semper
                                suscipit, posuere a, pede.
                            </p>
                            <a href="#" class="btn-action">Ver más</a>
                        </div>
                    </div>
                    <div class="carousel-img">
                        <img src="http://eict.pucmm.edu.do/wp-content/uploads/sites/6/2019/10/campus-santiago.jpg" class="d-block w-100" alt="#">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-title-wrapper">
                        <div class="carousel-campus-title">
                            <h4 style="font-size:32px !important;">Campus<br>Santo Domingo</h4>
                            <h6>CSTA</h6>
                        </div>
                    </div>
                    <div class="carousel-caption-wrapper">
                        <div class="carousel-caption-item">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit. Donec odio. Quisque volutpat
                                mattis eros. Nullam malesuada erat ut turpis.
                                Suspendisse urna nibh, viverra non, semper
                                suscipit, posuere a, pede.
                            </p>
                            <a href="#" class="btn-action">Ver más</a>
                        </div>
                    </div>
                    <div class="carousel-img">
                        <img src="http://eict.pucmm.edu.do/wp-content/uploads/sites/6/2019/10/campus-santodomingo.jpg" class="d-block w-100" alt="#">
                    </div>
                </div>
            </div>
        </div>
















            </main><!-- #main -->
        </div><!-- #primary -->
    </div>




<?php get_footer(); ?>