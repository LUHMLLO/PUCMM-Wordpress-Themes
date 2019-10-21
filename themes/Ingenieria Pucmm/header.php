<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $blog_info = get_bloginfo( 'name' ); ?> </title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap-4.3.1-dist/css/bootstrap.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Pinyon+Script|Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.0.1/css/unicons.css">

   
    <?php wp_head(); ?>
</head>
<body>




<div class="header-top-bar">
    <div class="header-top-bar container">

        <a id="header-top-bar-pucmm-btn" href="https://pucmm.edu.do/">
            <i class='uil uil-link'></i>
           <span>Ir al portal</span> 
        </a>

        <div id="header-top-bar-social-icons">
            <a href="#"><i class='uil uil-facebook-f'></i></a>
            <a href="#"><i class='uil uil-twitter'></i></a>
            <a href="#"><i class='uil uil-youtube'></i></a>
            <a href="#"><i class='uil uil-instagram-alt'></i></a>
            <a href="#"><i class='uil uil-linkedin'></i></a>
        </div><!--header top bar social icons-->

    </div><!---container-->
</div><!---header top bar--->





<header>
    <div class="container" style="padding: 0 !important;">
        <div class="custom-navbar h-100">

            <a class="custom-navbar-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt=""> 
            </a>




            <?php wp_nav_menu(array(
                'theme_location' => 'superior',
                'container' => false,
                'link_before' => '',
                'link_after'=>'',
                'items_wrap' => '<ul class="custom-navbar-links">%3$s</ul>',
            ));?>






            <div class="custom-navbar-search">
                <i class='uil uil-search'></i>
                <a href="#">
                    <span>Ver Programa</span>
                    <i class='uil uil-import'></i>
                </a>
            </div><!--custom navbar search-->

        </div><!---custom--navbar-->
    </div><!---container-->
</header>
















<?php

if ( is_active_sidebar( 'header-widget' ) ) : ?>
    <div id="header-widget-area" class="hw-widget widget-area" role="complementary">
	<?php dynamic_sidebar( 'header-widget' ); ?>
    </div>
	
<?php endif; ?>