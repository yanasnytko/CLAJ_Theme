<!-- Page Contact -->

<?php get_header(); ?>




<!-- Tu ne trouves pas d’antenne dans ton quartier ? -->
<div class="container">
  <h2>
    <?php the_title(); ?>
  </h2>
  <div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 card card-body">
      <?php
      $reseaux = get_field('reseaux');
      $facebook_image = $reseaux['facebook_picto'];
      $instagram_image = $reseaux['instagram_picto'];
      ?>

      <h3>
        <?= $reseaux['titre'] ?>
      </h3>
      <p>
        <?= $reseaux['texte'] ?>
      </p>
      <div>
        <?php if ($reseaux['facebook_link']) : ?>
        <a href="<?= $reseaux['facebook_link'] ?>" target="_blank">
          <img src="<?= $facebook_image['url'] ?>" alt="<?= $facebook_image['caption'] ?>"
            class="rounded img-fluid mr-3">
        </a>
        <?php endif; ?>
        <?php if ($reseaux['instagram_link']) : ?>
        <a href="<?= $reseaux['instagram_link'] ?>" target="_blank">
          <img src="<?= $instagram_image['url'] ?>" alt="<?= $instagram_image['caption'] ?>" class="rounded img-fluid"
            width="32px">
        </a>
        <?php endif; ?>
      </div>

    </div>
    <div class="col-sm-12 col-md-1 col-lg-1">
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 card card-body">
      <?php
      $urgence = get_field('urgence');
      ?>

      <h3>
        <?= $urgence['titre'] ?>
      </h3>
      <p>
        <?= $urgence['Texte'] ?>
      </p>
      <a href="tel:<?= $urgence['tel'] ?>" class="green-text" id="urgence-tel"><?= $urgence['tel'] ?></a>
    </div>

    <!-- reseaux -->


    <!-- Image -->
    <div class="col-sm-12 col-md-4 col-lg-4 pl-3">
      <?php
      $image = get_field('image');
      ?>

      <img src="<?= $image['url'] ?>" alt="<?= $image['caption'] ?>" class="rounded img-fluid ml-3">
    </div>
  </div>

  <!-- Une antenne CLAJ AMO près de chez toi -->
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
    </div>
  </div>
  <div class="row">
    <p>
      BIENTOT UNE CARTE ICI
    </p>

    <?php
    $google_map = $map['google_map'];
    if ($google_map) : ?>
    <div class="acf-map" data-zoom="16">
      <div class="marker" data-lat="<?php echo esc_attr($google_map['lat']); ?>"
        data-lng="<?php echo esc_attr($google_map['lng']); ?>"></div>
    </div>
    <?php endif; ?>
  </div>

  <!-- Une antenne à proximité -->
  <div class="row">
    <?php get_template_part('parts/antennes'); ?>
  </div>

  <!-- Tu ne trouves pas d’antenne dans ton quartier ? -->
  <div class="wave wave-small">

  </div>
  <div class="onwave-group">
    <div class="row align-items-center">
      <div class="col-sm-12 col-md-6 col-lg-6 ">
        <?php
        $pas_quartier = get_field('pas_quartier');
        $pas_quartier_image = $pas_quartier['image'];
        ?>

        <img src="<?= $pas_quartier_image['url'] ?>" alt="<?= $pas_quartiert_image['caption'] ?>"
          class="rounded img-fluid">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 ">
        <h3 class="onwave-text">
          <?= $pas_quartier['titre'] ?>
        </h3>
        <p class="onwave-text">
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

  <!-- Contact -->
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
  <!-- ICI IL VA Y AVOIR UN FORMULAIRE -->
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-8 ">
      <?php dynamic_sidebar('sidebar-1') ?>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 align-self-end">
      <img src="<?= $contact_image['url'] ?>" alt="<?= $contact_image['caption'] ?>" class="rounded img-fluid">
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>