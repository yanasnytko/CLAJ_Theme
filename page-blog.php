<!-- Page Facebook, avec les posts de Facebook de CLAJ -->

<?php get_header(); ?>

<div class="container">

  <div class="row">
    <?php
    $actus = get_field('actus');
    $actus_image = $actus['image'];
    ?>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <h2>
        <?= $actus['titre'] ?>
      </h2>
      <p>
        <?= $actus['texte'] ?>
      </p>
      <div class="container">
        <div class="row">
          <div class="col">
            <?php if ($actus['fb_link']) : ?>
            <a href="<?= $actus['fb_link'] ?>" class="btn btn-light">
              <?= $actus['fb_link_texte'] ?>
            </a>
            <?php endif; ?>
          </div>
          <div class="col">
            <?php if ($actus['in_link']) : ?>
            <a href="<?= $actus['in_link'] ?>" class="btn btn-light">
              <?= $actus['in_link_texte'] ?>
            </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <img src="<?= $actus_image['url'] ?>" alt="<?= $actus_image['caption'] ?>" class="rounded img-fluid">
    </div>
  </div>
  <div>
    <?php
    dynamic_sidebar('sidebar-2');
    ?>
  </div>
</div>

<?php get_footer(); ?>