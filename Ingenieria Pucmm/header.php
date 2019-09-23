<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $blog_info = get_bloginfo( 'name' ); ?> </title>

    <!-- imported css animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
    <!-- imported css fonts -->
    <link rel="stylesheet" src="https://fonts.googleapis.com/css?family=Pinyon+Script|Roboto|Roboto+Condensed:300,400,700|Roboto+Mono|Roboto+Slab&display=swap">
    <!-- imported css icons -->
    <link rel="stylesheet" src="https://unicons.iconscout.com/release/v1.0.0/css/unicons.css">
    <link rel="stylesheet" src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- imported css frameworks -->
    <link rel="stylesheet" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/henry.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/luis.js"></script>
   
    <?php wp_head(); ?>
</head>
<body>






<!-- BEGIN HEADER -->
<div class="container">
    <div class="header-top">
        <div class="header-label">
            <a id="icon-phone" href="#">(809) 200 1962</a>
            <a id="icon-mail" href="#">info@pucmm.edu.do</a>
            <a id="icon-clock" href="#">Lun - Sab | 8:00am - 6:00pm</a>
        </div>
        <div class="header-social">
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-facebook.png"/></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-twitter.png" alt="#"></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-youtube.png" alt="#"></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-instagram.png" alt="#"></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-linkedin.png" alt="#"></a>
        </div>
    </div>
</div>





<!-- BEGIN HEADER -->
<header>
    <div class="container">
        <nav class="navbar navbar-main navbar-expand-lg navbar-light">
            <a class="navbar-brand navbar-logo" href="<?php echo get_stylesheet_directory_uri(); ?>inicio">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>\img/logo.png" alt="#"/>
            </a>


            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse hide-on-mobile" id="navbarSupportedContent">           
                  <?php wp_nav_menu(array(
                       'theme_location' => 'superior',
                       'container' => false,
                       'items_wrap' => '<ul class="navbar-nav navbar-items mr-auto">%3$s</ul>',
                       'sub_menu_items' => 'dropdown-menu',
                       //'walker' => new sublevel_wrapper()
                   ));?>               
              
                <div class="navbar-action ml-auto">
                    <span class="navbar-btn-search"></span>
                    <a href="#" class="navbar-btn-download">
                        <span>Ver programa</span>
                    </a>
                </div>
            </div><!----bootstrap navigation links--->


            <div class="custom-mobile-sidebar animated disable-animation">

                  <?php wp_nav_menu(array(
                       'theme_location' => 'superior',
                       'container' => false,
                       'items_wrap' => '<ul class="navbar-nav navbar-items mr-auto">%3$s</ul>',
                       'sub_menu_items' => 'dropdown-menu',
                       //'walker' => new sublevel_wrapper()
                   ));?>        
              
            </div><!---custom mobile sidebar-->
            <div class="custom-mobile-sidebar-close-underlay animated disable-animation"></div>



        </nav><!----nav--->
    </div><!---cotnainer--->
    <!--  BEGIN SEARCH BLOCK  -->
    <div class="search-wrapper d-none">
        <div class="search-block">
            <label for="search">Buscar:</label>
            <input id="search" type="text" class="search-input" placeholder="Buscar..." />
        </div>
        <i class="btn-close"></i>
    </div>
</header>
















<?php

if ( is_active_sidebar( 'header-widget' ) ) : ?>
    <div id="header-widget-area" class="hw-widget widget-area" role="complementary">
	<?php dynamic_sidebar( 'header-widget' ); ?>
    </div>
	
<?php endif; ?>