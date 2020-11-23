<!-- Page Partenaires -->

<?php get_header(); ?>

<div class="container">
  <div class="row intro-texte">
    <?php
    $partenaires = get_field('partenaires');
    $partenaires_image = $partenaires['image'];
    ?>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <h2>
        <?= $partenaires['titre'] ?>
      </h2>
      <p>
        <?= $partenaires['texte'] ?>
      </p>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 intro-image">
      <img src="<?= $partenaires_image['url'] ?>" alt="<?= $partenaires_image['caption'] ?>" class="rounded img-fluid">
    </div>
  </div>

  <!-- <div>
    <?php //get_template_part('parts/partenaires');
    ?>
  </div> -->

  <div class="row align-items-center">
    <?php
    $nos_amis = get_field('nos_amis');
    $nos_amis_image = $nos_amis['image'];
    ?>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <img src="<?= $nos_amis_image['url'] ?>" alt="<?= $nos_amis_image['caption'] ?>" class="rounded img-fluid">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <h2>
        <?= $nos_amis['titre'] ?>
      </h2>
      <p>
        <?= $nos_amis['texte'] ?>
      </p>
    </div>

  </div>

  <div class="row align-items-center">
    <?php
    $partenaire_1 = get_field('partenaire_1');
    $partenaire_1_image = $partenaire_1['image'];
    ?>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <h2>
        <?= $partenaire_1['titre'] ?>
      </h2>
      <p>
        <?= $partenaire_1['texte'] ?>
      </p>
      <?php if ($partenaire_1['link']) : ?>
      <a href="<?= $partenaire_1['link'] ?>" class="btn btn-light">
        <?= $partenaire_1['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <img src="<?= $partenaire_1_image ?>" alt="" class="rounded img-fluid">
    </div>
  </div>

  <div class="row align-items-center">
    <?php
    $partenaire_2 = get_field('partenaire_2');
    $partenaire_2_image = $partenaire_2['image'];
    ?>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <img src="<?= $partenaire_2_image ?>" alt="" class="rounded img-fluid">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <h2>
        <?= $partenaire_2['titre'] ?>
      </h2>
      <p>
        <?= $partenaire_2['texte'] ?>
      </p>
      <?php if ($partenaire_2['link']) : ?>
      <a href="<?= $partenaire_2['link'] ?>" class="btn btn-light">
        <?= $partenaire_2['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>

  </div>

  <div class="row align-items-center">
    <?php
    $partenaire_3 = get_field('partenaire_3');
    $partenaire_3_image = $partenaire_3['image'];
    ?>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <h2>
        <?= $partenaire_3['titre'] ?>
      </h2>
      <p>
        <?= $partenaire_3['texte'] ?>
      </p>
      <?php if ($partenaire_3['link']) : ?>
      <a href="<?= $partenaire_3['link'] ?>" class="btn btn-light">
        <?= $partenaire_3['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <img src="<?= $partenaire_3_image ?>" alt="" class="rounded img-fluid">
    </div>
  </div>

  <div class="row align-items-center container">
    <?php
    $partenaire_4 = get_field('partenaire_4');
    $partenaire_4_image = $partenaire_4['image'];
    ?>
    <div class="col-sm-12 col-md-6 col-lg-6 justify-content-center">
      <img src="<?= $partenaire_4_image ?>" alt="" class="rounded img-fluid justify-content-center">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 ">
      <h2>
        <?= $partenaire_4['titre'] ?>
      </h2>
      <p>
        <?= $partenaire_4['texte'] ?>
      </p>
      <?php if ($partenaire_4['link']) : ?>
      <a href="<?= $partenaire_4['link'] ?>" class="btn btn-light">
        <?= $partenaire_4['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>

  </div>

</div>

<?php get_footer(); ?>