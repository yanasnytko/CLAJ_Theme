<!-- Page Contact -->

<?php get_header(); ?>

<div class="col-12">

  <h1>
    <?php the_title(); ?>
  </h1>


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

  <!-- Image -->
  <div>
    <?php
    $image = get_field('image');
    ?>

    <img src="<?= $image['url'] ?>" alt="<?= $image['caption'] ?>">
  </div>

  <!-- Une antenne CLAJ AMO près de chez toi -->
  <div>
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
    <?php
    $pas_quartier = get_field('pas_quartier');
    $pas_quartier_image = $pas_quartier['image'];
    ?>

    <img src="<?= $pas_quartier_image['url'] ?>" alt="<?= $pas_quartiert_image['caption'] ?>">
    <h2>
      <?= $pas_quartier['titre'] ?>
    </h2>
    <p>
      <?= $pas_quartier['texte'] ?>
    </p>
    <?php if ($pas_quartier['link']) : ?>
    <a href="<?= $pas_quartier['link']['url'] ?>">
      <?= $pas_quartier['link_texte'] ?>
    </a>
    <?php endif; ?>
  </div>

  <!-- Contact -->
  <div>
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
    <!-- ICI IL VA Y AVOIR UN FORMULAIRE -->
    <p>
      FORMULAIRE IS COMING!
    </p>
    <img src="<?= $contact_image['url'] ?>" alt="<?= $contact_image['caption'] ?>">
  </div>

</div>

<?php get_footer(); ?>