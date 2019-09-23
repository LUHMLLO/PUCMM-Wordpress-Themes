<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $blog_info = get_bloginfo( 'name' ); ?> </title>
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/luis.js"></script>
   
    <?php wp_head(); ?>
</head>
<body>






<!-- BEGIN TOP BAR-->
<div class="top-bar">
    <div class="top-bar-languages container">
        <?php if ( !function_exists('dynamic_sidebar') ||
        !dynamic_sidebar('Topbar Widget') ) : ?>
        <?php endif; ?>
    </div>
</div>





<!-- BEGIN HEADER -->
<header class="main-header bg-white animated faster">
    <div class="container-fluid main-header-navigation">
    
        <a class="main-header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="#"/>
        </a>

        <button class="main-header-btn">
            <i class='uil uil-apps'></i>
        </button>

        <?php wp_nav_menu(array(
            'theme_location' => 'superior',
            'container' => false,
            'items_wrap' => '<ul class="main-header-links">%3$s</ul>',
            //'walker' => new sublevel_wrapper()
        ));?>   
  
    </div><!--container--->
</header><!---main-header-->




<?php if ( !function_exists('dynamic_sidebar') ||
 !dynamic_sidebar('Header Widget') ) : ?>
<?php endif; ?>


        
        <?php wp_nav_menu(array(
            'theme_location' => 'superior',
            'container' => false,
            'items_wrap' => '<ul class="main-header-sidebar-links">%3$s</ul>',
            //'walker' => new sublevel_wrapper()
        ));?> 
        <div class="animated fadeIn custom-mobile-sidebar-close-underlay"></div>