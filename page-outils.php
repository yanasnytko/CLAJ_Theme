<!-- Page Outils -->

<?php get_header(); ?>

<?php get_template_part('parts/modals'); ?>

<div class="container-fluid">

  <div class="row intro-texte">
    <?php
    $outils_intro = get_field('outils_intro');
    $outils_intro_image = $outils_intro['image'];
    ?>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <h2>
        <?= $outils_intro['titre'] ?>
      </h2>
      <p>
        <?= $outils_intro['texte'] ?>
      </p>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 intro-image">
      <img src="<?= $outils_intro_image['url'] ?>" alt="<?= $outils_intro_image['caption'] ?>"
        class="rounded img-fluid">
    </div>
  </div>

  <?php
  $demande = get_field('demande');
  $demande_image = $demande['image'];
  ?>
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <h2>
        <?= $demande['titre'] ?>
      </h2>
      <p>
        <?= $demande['texte_1'] ?>
      </p>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <img src="<?= $demande_image['url'] ?>" alt="<?= $demande_image['caption'] ?>" class="rounded img-fluid">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <p>
        <?= $demande['texte_2'] ?>
      </p>
    </div>
  </div>

  <?php
  $outils = get_field('outils');
  $outils_image = $outils['image'];
  ?>
  <!--   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#279037" fill-opacity="1"
      d="M0,224L40,202.7C80,181,160,139,240,117.3C320,96,400,96,480,112C560,128,640,160,720,170.7C800,181,880,171,960,144C1040,117,1120,75,1200,80C1280,85,1360,139,1400,165.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
    </path>
  </svg> -->
  <div class="wave-outils">
    <div class="row wave">
      <div class="col-sm-12 col-md-6 col-lg-6 ">
        <h2>
          <?= $outils['titre'] ?>
        </h2>
        <p>
          <?= $outils['texte'] ?>
        </p>
      </div>
    </div>
    <div class="wave">
      <?php get_template_part('parts/outils'); ?>
    </div>
  </div>

  <!--   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#279037" fill-opacity="1"
      d="M0,224L40,202.7C80,181,160,139,240,117.3C320,96,400,96,480,112C560,128,640,160,720,170.7C800,181,880,171,960,144C1040,117,1120,75,1200,80C1280,85,1360,139,1400,165.3L1440,192L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
    </path>
  </svg> -->

  <?php
  $equinoxe = get_field('equinoxe');
  $equinoxe_image_1 = $equinoxe['image_1'];
  $equinoxe_image_2 = $equinoxe['image_2'];
  $equinoxe_logo = $equinoxe['logo'];
  ?>
  <div class="row align-items-center">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <img src="<?= $equinoxe_image_1['url'] ?>" alt="<?= $equinoxe_image_1['caption'] ?>" class="rounded img-fluid">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <img src="<?= $equinoxe_logo['url'] ?>" alt="<?= $equinoxe_logo['caption'] ?>" class="rounded img-fluid">
      <p>
        <?= $equinoxe['texte_1'] ?>
      </p>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <p>
        <?= $equinoxe['texte_2'] ?>
      </p>
      <?php if ($equinoxe['link']) : ?>
      <a href="<?= $equinoxe['link']['url'] ?>" class="btn btn-light">
        <?= $equinoxe['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <img src="<?= $equinoxe_image_2['url'] ?>" alt="<?= $equinoxe_image_2['caption'] ?>" class="rounded img-fluid">
    </div>
  </div>
</div>

<?php get_footer(); ?>