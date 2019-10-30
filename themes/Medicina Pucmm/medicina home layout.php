<?php 
/*
* Template Name: medicina home layout
*/
get_header(); ?>


		<div class="header-video-wrapper">
		   <video  width="100%" autoplay="autoplay" muted="muted" loop="loop" playsinline="playsinline">
		     <source src="https://pucmm.edu.do/Documents/medicina2.mp4">
       </video>

       <h1>Conoce La Escuela</h1>
       
       <button><a href="http://medicina.pucmm.edu.do/?page_id=30" class="text-white text-light">Ver más</a></button>
		</div>


<div style="padding: 0 !important; margin:0 !important; background:white !important; background-color:white !important; width:100%;height:100% !mportant;">



          <div class="container-fluid">
            <div class="container align-content-center justify-content-center" style="padding-top:60px !important;padding-bottom:60px !important; margin: auto !important;">
              <div class="row text-center justify-content-center">
                  
                  <div class="custom-home-icons-col">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/flaticons/png/education.png">
                    <h6>Programa</h6>
                  </div>
                  <div class="custom-home-icons-col">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/flaticons/png/244-workers.png">
                    <h6>Admisiones</h6>
                  </div>
                  <div class="custom-home-icons-col">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/flaticons/png/246-research-3.png">
                    <h6>Investigación</h6>
                  </div>
                  <div class="custom-home-icons-col">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/flaticons/png/238-around.png">
                    <h6>Internacional</h6>
                  </div>
                  <div class="custom-home-icons-col">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/flaticons/png/037-study.png">
                    <h6>Publicaciones</h6>
                  </div>
                  <div class="custom-home-icons-col">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/flaticons/png/question.png">
                    <h6>Información</h6>
                  </div>


              </div><!---row--->
            </div><!---container--->
          </div><!---container fluid--->


            <div style="padding:70px 0; background:whitesmoke !important; margin:auto !important;">
            <div class="container">
                <div style="margin: 0 !important;padding:15px !important;">
                <div class="row justify-content-center">

                    <div class="col-md-4" style="position:relative !important;">
                      <div style="position:relative !important; height:300px;">
                        <img class="full-image-absolute" src="<?php echo get_stylesheet_directory_uri(); ?>/img/miembros/Doctora.png">
                      </div>
                    </div>

                    <div class="col-md-7">
                        <div style="width:100%;height:100%;display:flex;flex-direction:column;justify-content:center; color:#333 !important;">
                           <h1 class="lead" style="text-transform:uppercase; font-weight:bold !important; margin:0 !important;color:#186cae !important;">Mensaje de la Decana</h1>
                           <p class="lead" style="font-size:14px !important; margin:15px 0 20px 0;">El médico de la Pontificia Universidad Católica Madre y Maestra será un profesional con un alto sentido de la ética, integral, solidario, líder y gestor de procesos de salud, concebida esta como un bien social y un ente de equidad y de equilibrio, con una visión global de los problemas, pero con un accionar local eficiente y eficaz, con una formación sólida en conocimientos, habilidades y actitudes que le permitan insertarse en diferentes escenarios nacionales e internacionales.</p>
                           <h5 class="lead" style="font-size:15px !important;font-weight:bold !important; margin:0 !important;">Mary Anne Butler Ransohoff</h5>
                           <p class="lead" style="font-size:13px !important; margin:0 !important;">Decana, Facultad de Ciencias de la Salud</p>
                        </div>
                    </div>
                
                </div><!---row--->
                </div><!-----container fluid--->
            </div>
            </div><!---container fluid--->




               <div class="container text-white text-light" style="margin:70px auto !important;">
               
                  <h2 class="w-100 text-center" style="text-transform:uppercase !important;font-size:40px !important;font-weight:bold;color:#186cae !important;"> 
                     <a href="http://medicina.pucmm.edu.do/?page_id=34">Eventos</a> 
                  </h2>

                      <?php echo do_shortcode("[add_eventon tiles='yes' tile_count='3' lang='L3']"); ?>
               </div>




            <div style="padding:80px 0; background:whitesmoke !important; margin:auto !important;">
            <div class="container">
                  <h2 class="w-100 text-center" style="text-transform:uppercase !important;font-size:40px !important;font-weight:bold;color:#186cae !important;"> 
                     <a href="http://medicina.pucmm.edu.do/?page_id=34">Noticias</a> 
                  </h2>
                <div class="recent-news-widget-plugin">
                    <div class="row justify-content-center" style="overflow:hidden !important; margin:auto !important; max-width:100% !important;">
                        <?php query_posts('posts_per_page=3');
                            if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <article class="recent-posts-object col-sm-12 col-md-4 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                                    <div class="recent-posts-object-inner">
                                        <div class="recent-post-thumbnails">
                                           <?php the_post_thumbnail();?>
                                        </div>  
                                        <div class="recent-post-content"><!-- content  -->
                                            <a href="<?php the_permalink(); ?>"> 
                                                <h6><?php the_title(); ?></h6>
                                            </a>
                                            <div class="recent-posts-content-text">
                                                    <?php the_excerpt(); ?>
                                            </div>
                                            <div>
                                              <a style="color: #A0A7AB !important; font-size:14px !important; padding:0;text-decoration:none; width:65px;" class="d-flex lead justify-content-center align-content-center" href="<?php the_permalink(); ?>">
                                                <span class="ml-0 mt-auto mb-auto mr-auto">Ver más</span>
                                                <i class="fas fa-angle-right ml-auto mt-auto mb-auto mr-0"></i>
                                              </a>
                                            </div>
                                        </div><!-- //.content -->
                                    </div><!---recent post objet inner--->
                                </article><!-- //. recent post objet-->
                        <?php endwhile; endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div><!---recent-news-widget-plugin--->
                
            </div><!---container fluid--->
            </div><!--container fluid--->



</div>



<?php get_footer(); ?>



