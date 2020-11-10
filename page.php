<!-- La page d'une antenne -->

<?php get_header(); ?>

<div class="col-12">
  <h1>
    <?php //the_title();
    ?>
  </h1>

  <!-- Description -->
  <div>
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

    <img src="<?= $description_image['url'] ?>" alt="<?= $description_image['caption'] ?>">
  </div>

  <!-- Infos -->
  <div class="card card-body">
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
  <div class="card card-body">
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

  <!-- offre -->
  <div>
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

  <!-- Map - voir le lien enregistré pour le coder : https://www.advancedcustomfields.com/resources/google-map/ -->
  <div>
    <?php
    $map = get_field('map');
    ?>
    <?= $map ?>
    <p>
      BIENTOT UNE CARTE ICI
    </p>
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