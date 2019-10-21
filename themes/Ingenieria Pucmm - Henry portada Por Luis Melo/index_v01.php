<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 */

get_header(); ?>



	<div class="container">
	  <div id="primary" class="content-area">
		<main id="main" class="site-main">
		   <div class="row">



		   <div class="col-lg-8">
            <div class="landing-wrapper">
                <div class="mb-5">
                    <h3>Mantente actualizado</h3>
                    <h2>Artículos y Noticias</h2>
				</div>
				
                <div class="row">

					<?php
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
					endif; ?>

                </div>
                
            </div>
        </div>
        <div class="col-lg-4">
            <div class="sidebar">
                <!-- BEGIN EVENTS -->
                <div class="flexbox-events">
                    <a class="title-emphasis" href="#">
                        <span>Próximos Eventos</span>
                        <i>+</i>
                    </a>
                    <div class="flexbox-box-events">
                        <a class="flexbox-box-item" href="#">
                            <span>Exposición artística “El Callejón de las Flores”</span>
                            <div class="flexbox-datetime">
                                <small>26 - Noviembre | 9:00am</small>
                                <small>Edificio A, Salón Ejecutivo - CSTA</small>
                            </div>
                        </a>
                        <a class="flexbox-box-item" href="#">
                            <span>Experto internacional ofrece conferencia sobre resiliencia […]</span>
                            <div class="flexbox-datetime">
                                <small>26 - Abril | 9:00am</small>
                                <small>Edificio A, Salón Ejecutivo - CSTA</small>
                            </div>
                        </a>
                        <a class="flexbox-box-item" href="#">
                            <span>Conferencia “Cibersecurity in Industry 4.0”</span>
                            <div class="flexbox-datetime">
                                <small>26 - Abril | 9:00am</small>
                                <small>Edificio A, Salón Ejecutivo - CSTA</small>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- BEGIN ARTICLE -->
                <div class="flexbox-articles">
                    <a class="title-emphasis" href="#">
                        <span>Artículos/Noticias</span>
                        <i>+</i>
                    </a>
                    <div class="article-row">
                        <div>
                            <a href="#" class="article-wrapper d-flex">
                                <div class="article-date text-center w-25">
                                    <span>19.</span>
                                    <small>Nov</small>
                                </div>
                                <div class="article-title w-75">
                                    <h4>Inauguran primera feria emprendedora Mujer Innova 2019</h4>
                                </div>
                            </a>
                            <a href="#" class="article-wrapper d-flex">
                                <div class="article-date text-center w-25">
                                    <span>19.</span>
                                    <small>Nov</small>
                                </div>
                                <div class="article-title w-75">
                                    <h4>Organizan Encuentro Nacional de Educadores Cívicos</h4>
                                </div>
                            </a>
                            <a href="#" class="article-wrapper d-flex">
                                <div class="article-date text-center w-25">
                                    <span>19.</span>
                                    <small>Nov</small>
                                </div>
                                <div class="article-title w-75">
                                    <h4>Inauguran Semana de la Innovación y la Propiedad Intelectual</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>






		   </div><!--row-->
		</main><!--main-->
	  <div><!-- /.row -->
	</div><!-- /.container -->

<?php
get_footer();