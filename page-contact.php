<!-- Page Contact -->

<?php get_header(); ?>




  <h1>
    <?php the_title(); ?>
  </h1>
  </div>
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-4 ">
  <!-- Tu ne trouves pas d’antenne dans ton quartier ? -->
  <div class="card card-body">
    <?php
    $urgence = get_field('urgence');
    ?>

    <h2>
      <?= $urgence['titre'] ?>
    </h2>
    <p>
      <?= $urgence['Texte'] ?>
    </p>
    <a href="tel:<?= $urgence['tel'] ?>"><?= $urgence['tel'] ?></a>
    </div>
  </div>
  <div class="col-sm-12 col-md-4 col-lg-4 ">
  <!-- reseaux -->
  <div class="card card-body">
    <?php
    $reseaux = get_field('reseaux');
    $facebook_image = $reseaux['facebook_picto'];
    ?>

    <h2>
      <?= $reseaux['titre'] ?>
    </h2>
    <p>
      <?= $reseaux['texte'] ?>
    </p>

    <?php if ($reseaux['facebook_link']) : ?>
    <a href="<?= $reseaux['facebook_link'] ?>" target="_blank">
      <img src="<?= $facebook_image['url'] ?>" alt="<?= $facebook_image['caption'] ?>">
    </a>
    <?php endif; ?>
  </div>

  </div>

  <!-- Image -->
  <!--<div>-->
  <div class="col-sm-12 col-md-4 col-lg-4 ">
    <?php
    $image = get_field('image');
    ?>

    <img src="<?= $image['url'] ?>" alt="<?= $image['caption'] ?>"class="rounded img-fluid">
  </div>
  <!--</div>-->

  </div>
  </div>
  </div>

  <!-- Une antenne CLAJ AMO près de chez toi -->
  <div>
  <div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-8 ">
    <?php
    $map = get_field('map');
    ?>

    <h2>
      <?= $map['titre'] ?>
    </h2>
    <p>
      <?= $map['texte'] ?>
    </p>
    <p>
      <div>
    </div>
  </div>
  <div class="col-sm-12 col-md-4 col-lg-4 ">
  </div>
      BIENTOT UNE CARTE ICI
    </p>
    <?= $map['google_map'] ?>
  </div>

  <!-- Une antenne à proximité -->
  <div>
    <?php get_template_part('parts/antennes'); ?>
  </div>

  <!-- Tu ne trouves pas d’antenne dans ton quartier ? -->
  <div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 ">
        <?php
        $pas_quartier = get_field('pas_quartier');
        $pas_quartier_image = $pas_quartier['image'];
        ?>

        <img src="<?= $pas_quartier_image['url'] ?>" alt="<?= $pas_quartiert_image['caption'] ?>"class="rounded img-fluid">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 ">
        <h2>
          <?= $pas_quartier['titre'] ?>
        </h2>
        <p>
          <?= $pas_quartier['texte'] ?>
        </p>
        <?php if ($pas_quartier['link']) : ?>
        <a href="<?= $pas_quartier['link']['url'] ?>" class="btn btn-light">
          <?= $pas_quartier['link_texte'] ?>
        </a>
        <?php endif; ?>
      </div>

    </div>
  </div>
  </div>

  <!-- Contact -->
  <div>
  <div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-8 ">
    <?php
    $contact = get_field('contact');
    $contact_image = $contact['image'];
    ?>

    <h2>
      <?= $contact['titre'] ?>
    </h2>
    <p>
      <?= $contact['texte'] ?>
    </p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 ">
        </div>

      </div>
    </div>
    <!-- ICI IL VA Y AVOIR UN FORMULAIRE -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 ">
    <p>
      FORMULAIRE IS COMING!
    </p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 ">
    <img src="<?= $contact_image['url'] ?>" alt="<?= $contact_image['caption'] ?>"class="rounded img-fluid">
    </div>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>