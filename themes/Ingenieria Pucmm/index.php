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
							get_template_part( 'template-parts/content', get_post_format() );
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
                </div>


            </div>
        </div>






<?php get_footer(); ?>
