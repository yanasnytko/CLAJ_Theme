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
      <h2 class="green-text">
        <?= $description_qui['nom'] ?>
      </h2>
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
      <h3 class="green-text">
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
  <div class="row mt-n2 mb-n1">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <h3 class="green-text">
        <?= $individuel['titre'] ?>
      </h3>
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
  <div class="wave wave-small">

  </div>
  <div class="onwave-group">
    <div class="row align-items-center">
      <div class="col-sm-12 col-md-6 col-lg-6">
        <img src="<?= $collectif_image ?>" alt="">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 mt-n5">
        <h3 class="onwave-text">
          <?= $collectif['titre'] ?>
        </h3>
        <p class="onwave-text">
          <?= $collectif['texte'] ?>
        </p>
      </div>
    </div>
  </div>

  <!-- Prevention sociale -->
  <?php
  $prevention = get_field('prevention');
  $prevention_image = $prevention['image'];
  ?>
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <h3 class="green-text">
        <?= $prevention['titre'] ?>
      </h3>
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
      <h3 class="green-text">
        <?= $pour_tous['titre'] ?>
      </h3>
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
    <h3 class="green-text">
      <?= $autres_publics['titre'] ?>
    </h3>
  </div>
  <div class="row mt-n3 mb-3">
    <div class="card card-body autres-publics col-sm-12 col-md-4 col-lg-4 antenne-info">
      <h3>
        <?= $public_1['titre'] ?>
      </h3>
      <p>
        <?= $public_1['texte'] ?>
      </p>
      <?php if ($public_1['lien']) : ?>
      <a href="<?= $public_1['lien']['url'] ?>" class="esp">
        <?= $public_1['texte_du_lien'] ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="card card-body autres-publics col-sm-12 col-md-4 col-lg-4 antenne-info">
      <h3>
        <?= $public_2['titre'] ?>
      </h3>
      <p>
        <?= $public_2['texte'] ?>
      </p>
      <?php if ($public_2['lien']) : ?>
      <a href="<?= $public_2['lien']['url'] ?>" class="esp">
        <?= $public_2['texte_du_lien'] ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="card card-body autres-publics col-sm-12 col-md-4 col-lg-4 antenne-info">
      <h3>
        <?= $public_3['titre'] ?>
      </h3>
      <p>
        <?= $public_3['texte'] ?>
      </p>
      <?php if ($public_3['lien']) : ?>
      <a href="<?= $public_3['lien'] ?>" class="esp">
        <?= $public_3['texte_du_lien'] ?>
      </a>
      <?php endif; ?>
    </div>

  </div>

</div>



<?php get_footer(); ?>