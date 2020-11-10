<!-- La page d'accueil -->

<?php get_header(); ?>

<div class="col-12">
  <div class="blog-header">
    <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
    <?php $description = get_bloginfo('description', 'display'); ?>
    <?php if ($description) { ?><p class="lead blog-description"><?php echo $description ?></p><?php } ?>
  </div>

  <!-- Intro -->
  <div>
    <?php
    $intro = get_field('intro');
    $intro_image = $intro['intro_image'];
    ?>

    <h2>
      <?= $intro['titre'] ?>
    </h2>
    <p>
      <?= $intro['intro_texte'] ?>
    </p>
    <?php if ($intro['link']) : ?>
    <a href="<?= $intro['link']['url'] ?>">
      <?= $intro['link_texte'] ?>
    </a>
    <?php endif; ?>
    <img src="<?php echo $intro_image['url'] ?>" alt="<?= $intro_image['caption'] ?>">
  </div>

  <!-- Pour qui, pour quoi ? -->
  <div>
    <?php
    $pour = get_field('pour');
    $pour_image = $pour['pour_image'];
    ?>

    <h2>
      <?= $pour['titre'] ?>
    </h2>
    <p>
      <?= $pour['texte'] ?>
    </p>
    <a href="<?= $pour['link'] ?>">
      <img src="<?= $pour_image['url'] ?>" alt="<?= $pour_image['caption'] ?>">
    </a>
  </div>

  <!-- Les antennes -->
  <div>
    <?php get_template_part('parts/antennes'); ?>
  </div>

  <!-- Nos outils et animations -->
  <div>
    <?php
    $outils = get_field('outils');
    $outils_image = $outils['image'];
    ?>

    <img src="<?= $outils_image['url'] ?>" alt="<?= $outils_image['caption'] ?>">
    <h2>
      <?= $outils['titre'] ?>
    </h2>
    <p>
      <?= $outils['Texte'] ?>
    </p>
    <?php if ($outils['link']) : ?>
    <a href="<?= $outils['link'] ?>">
      <?= $outils['link_texte'] ?>
    </a>
    <?php endif; ?>
  </div>

  <!-- Nos actualités -->
  <div>
    <?php
    $actus = get_field('actus');
    $actus_image = $actus['image'];
    ?>
    <h2>
      <?= $actus['titre'] ?>
    </h2>
    <img src="<?= $actus_image['url'] ?>" alt="">
    <?php if ($actus['link']) : ?>
    <a href="<?= $actus['link'] ?>">
      <?= $actus['link_texte'] ?>
    </a>
    <?php endif; ?>
  </div>

  <!-- Nos partenaires -->
  <div>
    <?php get_template_part('parts/partenaires'); ?>
  </div>

  <!-- Une urgence ? -->
  <div>
    <?php
    $urgence = get_field('urgence');
    $urgence_image = $urgence['image'];
    ?>

    <h2>
      <?= $urgence['titre'] ?>
    </h2>
    <p>
      <?= $urgence['texte'] ?>
    </p>
    <a href="tel:<?= $urgence['tel'] ?>"><?= $urgence['tel'] ?></a>
  </div>
  <img src="<?= $urgence_image['url'] ?>" alt="<?= $urgence_image['caption'] ?>">

</div>

<?php get_footer(); ?>