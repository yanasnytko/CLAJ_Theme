<!-- Le carroussel des partenaires -->
<?php
$partenaires = get_field('partenaires');
?>

<h2>
  <?= $partenaires['titre'] ?>
</h2>
<p>
  <?= $partenaires['texte'] ?>
</p>

<div class="swiper-container">

  <div class="swiper-wrapper">

    <!-- Antenne 1 -->
    <?php if ($partenaires['partenaire_1']['nom']) : ?>
    <div class="card card-body swiper-slide">
      <?php
        $partenaire_1 = $partenaires['partenaire_1'];
        $partenaire_1_image = $partenaire_1['image']
        ?>
      <a href="<?= $partenaire_1['link'] ?>">
        <img src="http://bootstrap.test:8000/wp-content/uploads/2020/11/1_alecoutedesjeunes.jpg">
      </a>
      <h4>
        <?= $partenaire_1['nom'] ?>
      </h4>
      <p>
        <?= $partenaire_1['description'] ?>
      </p>

    </div>
    <?php endif; ?>

    <!-- Antenne 2 -->
    <?php if ($partenaires['partenaire_2']['nom']) : ?>
    <div class=" card card-body swiper-slide">
      <?php
        $partenaire_2 = $partenaires['partenaire_2'];
        $partenaire_2_image = $partenaire_2['image']
        ?>
      <a href="<?= $partenaire_2['link'] ?>">
        <!-- <img src="http://bootstrap.test:8000/wp-content/uploads/2020/11/6_Ladebrouille.jpg"> -->
      </a>
      <h4>
        <?= $partenaire_2['nom'] ?>
      </h4>
      <p>
        <?= $partenaire_2['description'] ?>
      </p>

    </div>
    <?php endif; ?>

    <!-- Antenne 3 -->
    <?php if ($partenaires['partenaire_3']['nom']) : ?>
    <div class="card card-body swiper-slide">
      <?php
        $partenaire_3 = $partenaires['partenaire_3'];
        $partenaire_3_image = $partenaire_3['image']
        ?>
      <a href="<?= $partenaire_3['link'] ?>">
        <img src="<?= $partenaire_3_image['url'] ?>" alt="<?= $partenaire_3_image['caption'] ?>">
      </a>
      <h4>
        <?= $partenaire_3['nom'] ?>
      </h4>
      <p>
        <?= $partenaire_3['description'] ?>
      </p>

    </div>
    <?php endif; ?>

    <!-- Antenne 4 -->
    <?php if ($partenaires['partenaire_4']['nom']) : ?>
    <div class="card card-body swiper-slide">
      <?php
        $partenaire_4 = $partenaires['partenaire_4'];
        $partenaire_4_image = $partenaire_4['image']
        ?>
      <a href="<?= $partenaire_4['link'] ?>">
        <img src="<?= $partenaire_4_image['url'] ?>" alt="<?= $partenaire_4_image['caption'] ?>">
      </a>
      <h4>
        <?= $partenaire_4['nom'] ?>
      </h4>
      <p>
        <?= $partenaire_4['description'] ?>
      </p>

    </div>
    <?php endif; ?>

  </div>

  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>

<a href="<?= $partenaires['link'] ?>"><?= $partenaires['link_texte'] ?></a>