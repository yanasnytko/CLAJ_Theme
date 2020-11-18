<!-- Page de remerciement de mail envoyé -->

<?php get_header(); ?>

<div class="container">

  <div class="row align-items-center">
    <?php
    $thank_you = get_field('thank_you');
    $thank_you_image = $thank_you['image'];
    ?>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <h2>
        <?= $thank_you['titre'] ?>
      </h2>
      <p>
        <?= $thank_you['texte'] ?>
      </p>
      <?php if ($thank_you['link']) : ?>
      <a href="<?= $thank_you['link'] ?>" class="btn btn-light">
        <?= $thank_you['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <img src="<?= $thank_you_image['url'] ?>" alt="<?= $thank_you_image['caption'] ?>" class="rounded img-fluid">
    </div>
  </div>

</div>

<?php get_footer(); ?>