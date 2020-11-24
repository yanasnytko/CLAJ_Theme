<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="hamburger">
  <nav class="nav">
    <div class="container d-flex justify-content-between">
      <button type="button" class="btn btn-link navbar-toggle collapsed" data-toggle="modal" data-target="#menuModal">|||</button>
      <?php the_custom_logo($blog_id = 0) ?>
    </div>

  </nav>
</header>

<!-- FULLSCREEN MODAL - HAMBURGER MENU -->
<div class="modal fade fullscreen" id="menuModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" style="color:#fff;">
				<div class="modal-header d-flex flex-direction-row" style="border:0;">
						<button type="button" class="close btn btn-link m-0" data-dismiss="modal" aria-hidden="true">X</button>	
            <?php the_custom_logo($blog_id = 0) ?>
				</div>
				<div class="modal-body text-center">
				<?php wp_nav_menu(array(
            'theme_location' => 'hamburger-menu',
            'menu_class' => 'nav navigation justify-content-center d-flex flex-column'
          )); ?>
				</div>
			</div>
		</div>
  </div>
<!-- END FULLSCREEN MODAL - HAMBURGER MENU -->

  <header class="sticky-top">
    <nav class="nav">
      <div class="container d-flex justify-content-between">
          <?php the_custom_logo($blog_id = 0) ?>
          <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'menu_class' => 'nav navigation justify-content-center'
          )); ?>

      </div>
      </div>

    </nav>

  </header>

  <div class="container">

    <?php /* get_template_part('parts/slider'); */ ?>

    <div class="row">