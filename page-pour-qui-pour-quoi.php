<!-- Page Pour qui, pour quoi ? -->

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <!-- Intro -->
    <div class="col-12 col-md-6 intro-text">
      <?php
      $intro = get_field('intro');
      $intro_image = $intro['image'];
      ?>
      <h2>
        <?= $intro['titre'] ?>
      </h2>
      <p>
        <?= $intro['texte'] ?>
      </p>
    </div>
    <div class="col-12 col-md-6">
      <img src="<?php echo $intro_image['url'] ?>" alt="<?= $intro_image['caption'] ?>" class="rounded img-fluid">
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-md-6">
      <?php
      $description = get_field('description');
      ?>
      <h2>
        <?= $description['titre'] ?>
      </h2>
      <p>
        <?= $description['texte'] ?>
      </p>
    </div>
  </div>

  <div class="row">
    <?php get_template_part('parts/puzzle'); ?>
  </div>
</div>

<?php get_footer(); ?>