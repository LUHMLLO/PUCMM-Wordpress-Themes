<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>

	</div><!-- #content -->

<?php if ( is_active_sidebar( 'topfooter-1' ) ) : ?>  
<div class="jumbotron jumbotron-fluid bg-img mb-0 text-center text-white">
  <?php dynamic_sidebar( 'topfooter-1' ); ?>
</div>
<?php endif; ?>


<footer class="text-white text-center text-muted bg-unica">
  <div class="container pt-5">

      <section class="footer-widgets text-left text-white">
      <div class="container">
        <div class="row">

            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
              <div class="col">
                <aside class="widget-area footer-1-area mb-2">
                  <?php dynamic_sidebar( 'footer-1' ); ?>
                </aside>
              </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
              <div class="col">
                <aside class="widget-area footer-2-area mb-2">
                  <?php dynamic_sidebar( 'footer-2' ); ?>
                </aside>
              </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
              <div class="col">
                <aside class="widget-area footer-3-area mb-2">
                  <?php dynamic_sidebar( 'footer-3' ); ?>
                </aside>
              </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
              <div class="col">
                <aside class="widget-area footer-4-area mb-2">
                  <?php dynamic_sidebar( 'footer-4' ); ?>
                </aside>
              </div>
            <?php endif; ?>

        </div><!-- /.row -->
      </div><!---container--->
    </section>
    <!--<div class="row mt-4">
      <div class="col py-4"> Footer Social Icons -->
         <!-- <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
      </div>
    </div>-->
    <div class="row">
      <small class="copyright py-4 text-center text-white col">Copyright © <?php bloginfo( 'name' ); ?></small>
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>