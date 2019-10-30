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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
   
    <?php wp_head(); ?>
</head>
<body>






<!-- BEGIN TOP BAR-->
<div style="background:#186cae;" class="container-fluid">
<div class="container">
<div class="row top-bar justify-content-center align-content-center text-white text-light">


            <div class="col-sm-6 col-md-6 d-flex" style="padding:2px 0;margin-left:0 !important;">
                <i class="fas fa-angle-left ml-0 mt-auto mb-auto mr-2"></i>
                <a href="https://pucmm.edu.do/" style="font-weight:bold;">Portal <strong style="font-weight:bolder;">PUCMM</strong></a>
            </div>

            <div class="col-sm-6 col-md-6 top-bar-languages" style="margin-right:0 !important;">
                <?php if ( !function_exists('dynamic_sidebar') ||
                !dynamic_sidebar('Topbar Widget') ) : ?>
                <?php endif; ?>
            </div>


</div><!--top bar-->
</div><!--container-->
</div><!---style--->





<!-- BEGIN HEADER -->
<header class="main-header bg-white animated faster">
<div class="container-fluid d-flex justify-content-center align-content-center" style="padding-top:0 !important;padding-bottom:0 !important;">
    <div class="container main-header-navigation m-auto">
    
        <a class="main-header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MED-2.png" alt="#"/>
        </a>

        <button class="main-header-btn">
            <i class='uil uil-apps'></i>
        </button>

        <?php wp_nav_menu(array(
            'container' => false,
            'items_wrap' => '<ul class="main-header-links">%3$s</ul>',
            //'walker' => new sublevel_wrapper()
        ));?>   
  
    </div><!--container--->
</div><!---container fluid--->
</header><!---main-header-->



<?php if ( !function_exists('dynamic_sidebar') ||
 !dynamic_sidebar('Header Widget') ) : ?>
<?php endif; ?>


        

        <div class="mobile-custom-sidebar animated slideInLeft">
            <a class="main-header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="#"/>
            </a>

            <?php wp_nav_menu(array(
                'theme_location' => 'superior',
                'container' => false,
                'link_before' => '',
                'link_after'=>'',
                'items_wrap' => '<ul class="main-header-sidebar-links">%3$s</ul>',
            ));?>

        </div> 
        <div class="animated fadeIn custom-mobile-sidebar-close-underlay"></div>
















   