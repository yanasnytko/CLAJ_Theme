<!-- LA page d'erreur 404 -->

<?php get_header(); ?>

<!-- <div class="row align-items-center">
  <?php
  /* $not_found = get_field('not_found');
  $not_found_image = $not_found['image']; */
  ?>
  <div class="col-sm-12 col-md-4 col-lg-4 ">
    <h2>
      <?= $not_found['titre'] ?>
    </h2>
    <p>
      <?= $not_found['texte'] ?>
    </p>
    <?php if ($not_found['link']) : ?>
    <a href="<?= $not_found['link'] ?>" class="btn btn-light">
      <?= $not_found['link_texte'] ?>
    </a>
    <?php endif; ?>
  </div>
  <div class="col-sm-12 col-md-8 col-lg-8 ">
    <img src="<?= $not_found_image['url'] ?>" alt="<?= $not_found_image['caption'] ?>" class="rounded img-fluid">
  </div>
</div> -->

<div class="row align-items-center">
  <?php
  $not_found = get_field('not_found');
  $not_found_image = $not_found['image'];
  ?>
  <div class="col-sm-12 col-md-4 col-lg-4 ">
    <h2>
      Erreur 404
    </h2>
    <p>
      Oups ! Il semble que cette page ne soit pas ou plus disponible...
    </p>
    <a href="http://bootstrap.test:8000/" class="btn btn-light">
      Retourner sur le site
    </a>
  </div>
  <div class="col-sm-12 col-md-8 col-lg-8 ">
    <img src="http://bootstrap.test:8000/wp-content/uploads/2020/11/erreur404-1.png" alt="" class="rounded img-fluid">
  </div>
</div>

<?php get_footer(); ?>