<!-- Page A Propos -->

<?php get_header(); ?>

<div class="col-12">

  <h1>
    <?php the_title(); ?>
  </h1>

  <!-- Desription -->
  <div>
    <?php
    $description = get_field('description');
    $desription_image = $description['description_image'];
    ?>

    <p>
      <?= $description['description_texte'] ?>
    </p>
    <img src="<?= $desription_image['url'] ?>" alt="<?= $desription_image['caption'] ?>">
  </div>

  <!-- Notre Mission -->
  <div>
    <?php
    $mission = get_field('mission');
    ?>

    <h2>
      <?= $mission['mission_titre'] ?>
    </h2>
    <p>
      <?= $mission['mission_texte'] ?>
    </p>
    <p class="valeur">
      <?= $mission['mission_valeur_1'] ?>
    </p>
    <p class="valeur">
      <?= $mission['mission_valeur_2'] ?>
    </p>
  </div>

  <!-- Nos publics cibles -->
  <div>
    <?php
    $publics = get_field('publics');
    $publics_image = $publics['publics_image'];
    ?>

    <img src="<?= $publics_image['url'] ?>" alt="<?= $publics_image['caption'] ?>">
    <h2>
      <?= $publics['publics_titre'] ?>
    </h2>
    <p>
      <?= $publics['publics_texte'] ?>
    </p>

    <?php if ($publics['publics_link']) : ?>
    <a href="<?= $publics['publics_link']['url'] ?>">
      <?= $publics['publics_link_text'] ?>
    </a>
    <?php endif; ?>
  </div>

  <!-- Une antenne à proximité -->
  <div>
    <?php get_template_part('parts/antennes'); ?>
  </div>

  <!-- Confidentialité et gratuité -->
  <div>
    <?php
    $confident = get_field('confident');
    ?>

    <h2>
      <?= $confident['confident_titre'] ?>
    </h2>
    <p>
      <?= $confident['confident_texte'] ?>
    </p>
  </div>

  <!-- Nos partenaires -->
  <div>
    <?php
    $partenaires = get_field('partenaires');
    $partenaires_image = $partenaires['partenaires_image'];
    ?>

    <h2>
      <?= $partenaires['partenaires_titre'] ?>
    </h2>
    <p>
      <?= $partenaires['partenaires_texte'] ?>
    </p>

    <?php if ($partenaires['partenaires_link']) : ?>
    <a href="<?= $partenaires['partenaires_link'] ?>">
      <?= $partenaires['partenaires_link_texte'] ?>
    </a>
    <?php endif; ?>
    <img src="<?= $partenaires_image['url'] ?>" alt="<?= $partenaires_image['caption'] ?>">
  </div>

</div>

<?php get_footer(); ?>