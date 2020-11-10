<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="sticky-top">
    <nav class="justify-content-center nav">
      <?php the_custom_logo($blog_id = 0) ?>
      <?php wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'menu_class' => 'nav navigation justify-content-center'
      )); ?>
    </nav>
  </header>

  <div class="container">

    <?php /* get_template_part('parts/slider'); */ ?>

    <div class="row">