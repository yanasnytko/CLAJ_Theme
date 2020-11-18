<!-- La page d'une antenne -->

<?php get_header(); ?>

<div class="container">
  <div class="row">

    <!-- Description -->
    <div class="col-sm-12 col-md-6 col-lg-6">
      <?php
      $description = get_field('description');
      $description_image = $description['image'];
      ?>

      <h2>
        <?= $description['titre'] ?>
      </h2>
      <p>
        <?= $description['texte'] ?>
      </p>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <img src="<?= $description_image['url'] ?>" alt="<?= $description_image['caption'] ?>">
    </div>
  </div>

  <div class="row">
    <!-- Infos -->
    <div class="card card-body col-sm-12 col-md-4 col-lg-4">
      <?php
      $infos = get_field('infos');
      ?>

      <h2>
        <?= $infos['titre'] ?>
      </h2>
      <p>
        <?= $infos['adresse'] ?>
      </p>
      <a href="tel:<?= $infos['tel'] ?>"><?= $infos['tel'] ?></a>
      <a href="mailto:<?= $infos['mail'] ?>"><?= $infos['mail'] ?></a>
    </div>

    <!-- horaires -->
    <div class="card card-body col-sm-12 col-md-4 col-lg-4">
      <?php
      $horaires = get_field('horaires');
      $categorie_1 = $horaires['categorie_1'];
      $categorie_2 = $horaires['categorie_2'];
      ?>

      <h2>
        <?= $horaires['titre'] ?>
      </h2>
      <p>
        <?= $categorie_1['nom'] ?>&nbsp;: <?= $categorie_1['heures'] ?>
      </p>
      <p>
        <?= $categorie_2['nom'] ?>&nbsp;: <?= $categorie_2['heures'] ?>
      </p>
      <p>
        <?= $horaires['commentaire'] ?>
      </p>

    </div>

    <!-- reseaux -->
    <div class="card card-body col-sm-12 col-md-4 col-lg-4">
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

  <!-- offre -->
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <?php
      $offre = get_field('offre');
      ?>

      <h2>
        <?= $offre['titre'] ?>
      </h2>
      <p>
        <?= $offre['texte'] ?>
      </p>
    </div>
  </div>

  <!-- Map - voir le lien enregistré pour le coder : https://www.advancedcustomfields.com/resources/google-map/ -->
  <div class="row">
    <?php
    $map = get_field('map');
    ?>
    <?= $map ?>
    <p>
      BIENTOT UNE CARTE ICI
    </p>
  </div>

  <!-- Contact -->
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-8">
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
  </div>
  <!-- ICI IL VA Y AVOIR UN FORMULAIRE -->
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-8">
      <p>
        FORMULAIRE IS COMING!
      </p>
      <?php dynamic_sidebar('sidebar-1') ?>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4">
      <img src="<?= $contact_image['url'] ?>" alt="<?= $contact_image['caption'] ?>">
    </div>
  </div>
</div>

<?php get_footer(); ?>