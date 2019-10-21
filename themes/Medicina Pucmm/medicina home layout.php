<?php 
/*
* Template Name: medicina home layout
*/
get_header(); ?>


   <div class="home-only-header-widget">
        <?php if ( !function_exists('dynamic_sidebar') ||
            !dynamic_sidebar('HomeHeaderWidget Widget') ) : ?>
        <?php endif; ?>     
   </div>


<div style="padding:10px 0 !important; margin:0 !important; background:white !important; background-color:white !important; width:100%;height:100% !mportant;">




            <div class="container" style="margin:50px auto !important;">
              <div class="row text-center justify-content-center">
                  
                  <div class="col-sm-6 col-md-3" style="padding:10px;">
                  <img src="http://multisite.wh100.pucmm.edu.do/escuelapucmm/wp-content/uploads/sites/5/2019/10/1.png" width="76" height="76">
                    <h5>Modern</h5>
                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing..</small>
                  </div>
                  <div class="col-sm-6 col-md-3" style="padding:10px;">
                  <img src="http://multisite.wh100.pucmm.edu.do/escuelapucmm/wp-content/uploads/sites/5/2019/10/2.png" width="76" height="76">
                    <h5>Clean</h5>
                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing..</small>
                  </div>
                  <div class="col-sm-6 col-md-3" style="padding:10px;">
                  <img src="http://multisite.wh100.pucmm.edu.do/escuelapucmm/wp-content/uploads/sites/5/2019/10/3.png" width="76" height="76">
                    <h5>Responsive</h5>
                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing..</small>
                  </div>
                  <div class="col-sm-6 col-md-3" style="padding:10px;">
                  <img src="http://multisite.wh100.pucmm.edu.do/escuelapucmm/wp-content/uploads/sites/5/2019/10/4.png" width="76" height="76">
                    <h5>Professional</h5>
                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing..</small>
                  </div>


              </div>
            </div><!---container fluid--->


            <div class="" style="background:whitesmoke !important; margin:50px auto !important;">
            <div class="container">
                <div style="margin: 0 !important;padding:15px !important;">
                <div class="row justify-content-center">

                    <div class="col-md-4" style="position:relative !important;">
                      <div style="position:relative !important; height:350px;">
                        <img class="full-image-absolute" src="http://multisite.wh100.pucmm.edu.do/escuelapucmm/wp-content/uploads/sites/5/2019/09/doctora.png">
                      </div>
                    </div>

                    <div class="col-md-8">
                        <div style="width:100%;height:100%;display:flex;flex-direction:column;justify-content:center;">
                           <br>
                           <h1 class="lead" style="font-size:22px !important;">MENSAJE DE BIENVENIDA</h1>
                           <p class="lead" style="font-size:14px !important;">El médico de la Pontificia Universidad Católica Madre y Maestra será un profesional con un alto sentido de la ética, integral, solidario, líder y gestor de procesos de salud, concebida esta como un bien social y un ente de equidad y de equilibrio, con una visión global de los problemas, pero con un accionar local eficiente y eficaz, con una formación sólida en conocimientos, habilidades y actitudes que le permitan insertarse en diferentes escenarios nacionales e internacionales.</p>
                           <br>
                           <h5 class="lead" style="font-size:15px !important;">Mary Anne Butler Ransohoff</h5>
                           <p class="lead" style="font-size:13px !important;">Decana Facultad de Ciencias de la Salud</p>
                        </div>
                    </div>
                
                </div><!---row--->
                </div><!-----container fluid--->
            </div>
            </div><!---container fluid--->




               <div class="container" style="margin:70px auto 40px auto !important;">
                      <?php echo do_shortcode("[add_eventon]"); ?>
               </div>




            <div class="" style="background:whitesmoke !important; margin:50px auto !important;">
            <div class="container">
                <div class="recent-news-widget-plugin">
                    <div class="row justify-content-center" style="overflow:hidden !important; margin:auto !important; max-width:100% !important;">
                        <?php query_posts('posts_per_page=3');
                            if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <article class="recent-posts-object col-sm-12 col-md-4 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                                    <div class="recent-posts-object-inner">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="recent-post-thumbnails">
                                            <?php the_post_thumbnail('luis_size');?>
                                            </div>  
                                        </a>
                                        <div class="recent-post-content"><!-- content  -->
                                            <a href="<?php the_permalink(); ?>"> 
                                                <h6><?php the_title(); ?></h6>
                                            </a>
                                            <div class="recent-posts-content-text">
                                                    <?php the_excerpt(); ?>
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




<style> 
    
    .full-image-absolute{
      position:absolute !important;
      object-fit: cover !important;

      top:0 !important;
      right:0 !important;
      bottom:0 !important;
      left:0 !important;
      margin:auto !important;

      width:100% !important;
      height:100% !important; 
    }


		  .recent-news-widget-plugin{
			padding: 10px 0;
			  overflow: hidden !important;
			  box-sizing:border-box !important;
		  }
		  .recent-news-widget-plugin h3{
			  padding: 5px 15px 0 15px !important;
		  }
		  .recent-posts-object{
			  margin:0px !important;
			  padding:10px !important;
			  min-height:450px !important;
			  height:auto !important;
              max-height:550px !important;
              max-width:500px !important;
		  }
		  .recent-posts-object-inner{
			  background: white;
			  overflow: hidden !important;
			  min-height:100% !important;
			  height:100% !important;
			  max-height:100% !important;
		  }
		  .recent-post-thumbnails{
			margin:0 0 5px 0!important;
			padding:0 !important;
			min-width: 100% !important; 
			width: 100% !important;
			max-width: 100% !important;
			min-height:200px !important;
			height:255px !important;
			max-height:255px !important;
			overflow:hidden !important;
			object-fit: cover !important;
			position: relative !important;
		  }
		  .recent-post-thumbnails img{
			  position:absolute !important;
			  top:0;
			  right:0;
			  bottom:0;
			  left:0;
			  margin:auto !important;
			  min-width:100%;
			  max-width:100%;
			  min-height:100%;
			  max-height:100%;
			  object-fit:cover !important;
		  }
		  .recent-post-content{
			  padding:10px 15px 15px 15px !important;
		  }
		  .recent-post-content a{
			  margin: 0 !important;
			  padding: 0 !important;
			  font-size:16px !important;
			  text-decoration:none !important;
			  text-transform:uppercase !important;
		  }
		  .recent-posts-content-text{
			  margin: 0 !important;
			  padding: 0 !important;
			  font-size:12px !important;			  
		  }
		</style>