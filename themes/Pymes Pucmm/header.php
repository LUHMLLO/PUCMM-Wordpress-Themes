<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $blog_info = get_bloginfo( 'name' ); ?> </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" media="all">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" media="all">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome-all.min.css" media="all">
    <!-- flaticon -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/flaticonLuis/flaticon.css" media="all">
    <!-- animate.css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" media="all">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" media="all">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css" media="all">
    <!-- stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" media="all">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" media="all">
    <!-- responsive -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" media="all">

    <?php wp_head(); ?>

</head>

<body>




    <!-- navbar area start -->
    <nav class="navbar pymes-navbar">
        <div class="container">


            <a class="navbar-logo" href="<?php echo get_template_directory_uri(); ?>/inicio">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/logos-pyme.jpg" alt="logo">
            </a>

            <div class="navbar-divider"></div>

            
            <button class="menu-pymes-btn">
                <i class="flaticon-menu-2"></i>
            </button>

                   <?php wp_nav_menu(array(
                       'theme_location' => 'superior',
                       'container' => 'div',
                       'container_class' => 'menu-pymes',
                       'container_id' => 'menu-mi-pymes',
                       'items_wrap' => '<ul class="menu-pymes-inner">%3$s</ul>',
                       'menu_class' => 'menu-pymes-item'
                   ));?>



        </div>
    </nav>
    <!-- navbar area end -->