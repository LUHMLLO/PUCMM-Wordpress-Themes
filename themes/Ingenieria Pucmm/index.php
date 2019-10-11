<?php get_header(); ?>




        <div class="container">
            <br>
            <div class="row">



                <div class="col-md-8">
                    <div class="index-row-page-name">
                        <h3>Mantente actualizado</h3>
                        <h2>Artículos y Noticias</h2>
                    </div>
                    <div class="row">


					<?php
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content-index', get_post_format() );
						endwhile;
					endif; ?>

                    
                    </div><!---row--->


                    <br><br>
                        <div class="post-navigation">
                            <ul class="pagination">
                             <?php pagination_bar(); ?>
                            </ul>
                        </div>


                </div><!--col 8-->

                <div class="col-md-4">
                


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





                </div><!---col 4--->


            </div>
        </div>






<?php get_footer(); ?>
