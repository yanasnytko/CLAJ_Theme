<!-- La page d'accueil -->

<?php get_header(); ?>

<div class="container">
  <?php
  $comment = get_field('comment');
  ?>
  <?php if ($comment) : ?>
  <div class="alert" id="commentaire" role="alert">
    <?= $comment ?>
  </div>
  <?php endif; ?>

  <div class="row align-items-center">
    <!-- Intro -->
    <div class="col-12 col-md-6 intro-text">
      <?php
      $intro = get_field('intro');
      $intro_image = $intro['intro_image'];
      ?>
      <h2>
        <?= $intro['titre'] ?>
      </h2>
      <p>
        <?= $intro['intro_texte'] ?>
      </p>
      <?php if ($intro['link']) : ?>
      <a href="<?= $intro['link']['url'] ?>" class="btn btn-light">
        <?= $intro['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="col-12 col-md-6 image-intro">
      <img src="<?php echo $intro_image['url'] ?>" alt="<?= $intro_image['caption'] ?>" class="rounded img-fluid">
    </div>
  </div>

  <!-- Pour qui, pour quoi ? -->
  <div class="row align-items-center">
    <?php
    $pour = get_field('pour');
    $pour_image = $pour['pour_image'];
    ?>
    <div class="col-sm-12 col-md-6 col-lg-6 puzzle">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 qui">
      <h2>
        <?= $pour['titre'] ?>
      </h2>
      <p>
        <?= $pour['texte'] ?>
      </p>
    </div>
  </div>
  <div class="row">
    <?php get_template_part('parts/puzzle'); ?>
  </div>

  <!-- Les antennes -->
  <div>
    <?php get_template_part('parts/antennes'); ?>
  </div>

  <!-- Nos outils et animations -->
  <div class="row align-items-center">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <?php
      $outils = get_field('outils');
      $outils_image = $outils['image'];
      ?>

      <img src="<?= $outils_image['url'] ?>" alt="<?= $outils_image['caption'] ?>" class="rounded img-fluid">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <h2>
        <?= $outils['titre'] ?>
      </h2>
      <p>
        <?= $outils['Texte'] ?>
      </p>
      <?php if ($outils['link']) : ?>
      <a href="<?= $outils['link'] ?>" class="btn btn-light">
        <?= $outils['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>
  </div>

  <!-- Nos actualités -->
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <?php
      $actus = get_field('actus');
      $actus_image = $actus['image'];
      ?>
      <h2>
        <?= $actus['titre'] ?>
      </h2>
      <?php if ($actus['link']) : ?>
      <a href="<?= $actus['link'] ?>" class="btn btn-light">
        <?= $actus['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <img src="<?= $actus_image['url'] ?>" alt="<?= $actus_image['caption'] ?>" class="rounded img-fluid">
    </div>
  </div>

  <!-- Nos partenaires -->
  <div>
    <?php
    $partenaires = get_field('partenaires');
    ?>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6"">
      </div>
      <div class=" col-sm-12 col-md-6 col-lg-6"">
        <h2>
          <?= $partenaires['titre'] ?>
        </h2>
        <p>
          <?= $partenaires['texte'] ?>
        </p>
        <?php if ($partenaires['link']) : ?>
        <a href="<?= $partenaires['link'] ?>" class="btn btn-light">
          <?= $partenaires['link_texte'] ?>
        </a>
        <?php endif; ?>
      </div>

    </div>
    <?php //get_template_part('parts/partenaires');
    ?>
  </div>

  <!-- Une urgence ? -->
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <?php
      $urgence = get_field('urgence');
      $urgence_image = $urgence['image'];
      ?>

      <h2>
        <?= $urgence['titre'] ?>
      </h2>
      <p>
        <?= $urgence['texte'] ?>
      </p>
      <a href="<?= $urgence['link'] ?>" class="btn btn-light">
        <?= $urgence['link_texte'] ?>
      </a>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <img src="<?= $urgence_image['url'] ?>" alt="<?= $urgence_image['caption'] ?>" class="rounded img-fluid">
    </div>
  </div>
</div>

<?php get_footer(); ?>