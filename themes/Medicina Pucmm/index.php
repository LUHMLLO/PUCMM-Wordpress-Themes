<?php get_header(); ?>




        <div class="container mt-5">
            <div class="row">



                <div class="col-md-8">
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


                <div class="col-md-4 sidebar-outter">
                    <div class="sidebar bg-white">

                        <div class="sidebar-publicaciones">
                            <h4>Publicaciones recientes</h4>
                            <?php query_posts('posts_per_page=5');
                                if (have_posts()) : while (have_posts()) : the_post(); ?>
                                
                                    <li class="w-100 mb-3 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                                       <img class="sidebar-publicacion-reciente-imagen-icono" src="<?php echo get_stylesheet_directory_uri(); ?>/font-awesome/newspaper-regular.svg" alt=""> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li><!--article-->

                                <?php endwhile; endif; ?>
                            <?php wp_reset_query(); ?>                            
                        </div><!---sidebar-publicaciones--->

                        <div class="sidebar-categorias">
                            <h4>Categorias</h4>
                            <?php wp_list_cats() ?>
                        </div><!---sidebar-categorias--->

                        <div class="sidebar-etiquetas">
                            <h4>Etiquetas</h4>
                            <?php
                                $tags = get_tags();
                                if ( $tags ) :
                                    foreach ( $tags as $tag ) : ?>
                                    <li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div><!---sidebar-etiquetas--->

                    </div><!---sidebar--->
                </div><!---col 4--->


            </div>
        </div>






<?php get_footer(); ?>
