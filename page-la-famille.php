<!-- La page d'une cible -->

<?php get_header(); ?>

<div class="container">

  <!-- Pour qui -->
  <?php
  $description_qui = get_field('description_qui');
  $description_qui_image = $description_qui['image'];
  ?>
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <h2>
        <?= $description_qui['titre'] ?>
      </h2>
      <h3>
        <?= $description_qui['nom'] ?>
      </h3>
      <p>
        <?= $description_qui['texte'] ?>
      </p>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <img src="<?= $description_qui_image['url'] ?>" alt="<?= $description_image['caption'] ?>">
    </div>
  </div>

  <?php if ($description_qui['nom_2']) : ?>
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <h3>
        <?= $description_qui['nom_2'] ?>
      </h3>
      <p>
        <?= $description_qui['texte_2'] ?>
      </p>
    </div>
  </div>
  <?php endif; ?>

  <!-- Pour quoi -->
  <?php
  $quoi = get_field('quoi');
  $quoi_image = $quoi['image'];
  ?>
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <h2>
        <?= $quoi['titre'] ?>
      </h2>
      <p>
        <?= $quoi['texte'] ?>
      </p>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <img src="<?= $quoi_image ?>" alt="">
    </div>
  </div>

  <!-- Individuel -->
  <?php
  $individuel = get_field('individuel');
  $individuel_image = $individuel['image'];
  ?>
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <h2>
        <?= $individuel['titre'] ?>
      </h2>
      <p>
        <?= $individuel['texte'] ?>
      </p>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <img src="<?= $individuel_image ?>" alt="">
    </div>
  </div>

  <!-- Collectif -->
  <?php
  $collectif = get_field('collectif');
  $collectif_image = $collectif['image'];
  ?>
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <img src="<?= $collectif_image ?>" alt="">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <h2>
        <?= $collectif['titre'] ?>
      </h2>
      <p>
        <?= $collectif['texte'] ?>
      </p>
    </div>
  </div>

  <!-- Prevention sociale -->
  <?php
  $prevention = get_field('prevention');
  $prevention_image = $prevention['image'];
  ?>
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <h2>
        <?= $prevention['titre'] ?>
      </h2>
      <p>
        <?= $prevention['texte'] ?>
      </p>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <img src="<?= $prevention_image['url'] ?>" alt="">
    </div>
  </div>

  <!-- Pour tous -->
  <?php
  $pour_tous = get_field('pour_tous');
  ?>
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <h2>
        <?= $pour_tous['titre'] ?>
      </h2>
      <p>
        <?= $pour_tous['texte'] ?>
      </p>
    </div>
  </div>

  <!-- Autres publics -->
  <?php
  $autres_publics = get_field('autres_publics');
  $public_1 = $autres_publics['public_1'];
  $public_2 = $autres_publics['public_2'];
  $public_3 = $autres_publics['public_3'];
  ?>
  <div class="row">
    <h2>
      <?= $autres_publics['titre'] ?>
    </h2>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4">
      <h3>
        <?= $public_1['titre'] ?>
      </h3>
      <p>
        <?= $public_1['texte'] ?>
      </p>
      <?php if ($public_1['lien']) : ?>
      <a href="<?= $public_1['lien']['url'] ?>" class="btn btn-light">
        <?= $public_1['texte_du_lien'] ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4">
      <h3>
        <?= $public_2['titre'] ?>
      </h3>
      <p>
        <?= $public_2['texte'] ?>
      </p>
      <?php if ($public_2['lien']) : ?>
      <a href="<?= $public_2['lien']['url'] ?>" class="btn btn-light">
        <?= $public_2['texte_du_lien'] ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4">
      <h3>
        <?= $public_3['titre'] ?>
      </h3>
      <p>
        <?= $public_3['texte'] ?>
      </p>
      <?php if ($public_3['lien']) : ?>
      <a href="<?= $public_3['lien'] ?>" class="btn btn-light">
        <?= $public_3['texte_du_lien'] ?>
      </a>
      <?php endif; ?>
    </div>

  </div>

</div>



<?php get_footer(); ?>