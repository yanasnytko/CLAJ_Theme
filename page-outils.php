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
      <h2 class="green-text">
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
      <h3 class="green-text">
        <?= $demande['titre'] ?>
      </h3>
      <p>
        <?= $demande['texte_1'] ?>
      </p>
    </div>
  </div>
  <div class="row align-items-center mar-bot">
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

  <div class="wave wave-large">

  </div>
  <div class="onwave-group">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 ">
        <h3 class="onwave-text">
          <?= $outils['titre'] ?>
        </h3>
        <p class="onwave-text">
          <?= $outils['texte'] ?>
        </p>
      </div>
    </div>
    <div>
      <?php get_template_part('parts/outils'); ?>
    </div>
  </div>

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
      <img src="<?= $equinoxe_logo['url'] ?>" alt="<?= $equinoxe_logo['caption'] ?>" class="rounded img-fluid"
        id="equinoxe-logo">
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
      <a href="<?= $equinoxe['link'] ?>" class="btn btn-light">
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