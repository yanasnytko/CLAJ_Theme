<!-- Le carousselle de tous les outils -->
<?php
$outil_1 = get_field('outil_1');
$outil_2 = get_field('outil_2');
$outil_3 = get_field('outil_3');
$outil_4 = get_field('outil_4');
$outil_5 = get_field('outil_5');
$outil_6 = get_field('outil_6');
?>

<div class="swiper-container row">
  <div class="swiper-wrapper">

    <!-- Outils 1 -->
    <?php if ($outil_1['titre']) : ?>
    <div class="swiper-slide">
      <div class="card card-body outil">
        <h3>
          <?= $outil_1['titre'] ?>
        </h3>
        <p>
          <?= $outil_1['intro'] ?>
        </p>
        <?php if ($outil_1['link_texte']) : ?>
        <a type="button" data-toggle="modal" data-target="#outil_1" class="esp">
          <?= $outil_1['link_texte'] ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>

    <!-- Outils 2 -->
    <?php if ($outil_2['titre']) : ?>
    <div class="swiper-slide">
      <div class="card card-body outil">
        <h3>
          <?= $outil_2['titre'] ?>
        </h3>
        <p>
          <?= $outil_2['intro'] ?>
        </p>
        <?php if ($outil_2['link_texte']) : ?>
        <a type="button" data-toggle="modal" data-target="#outil_2" class="esp">
          <?= $outil_2['link_texte'] ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>

    <!-- Outils 3 -->
    <?php if ($outil_3['titre']) : ?>
    <div class="swiper-slide">
      <div class="card card-body outil">
        <h3>
          <?= $outil_3['titre'] ?>
        </h3>
        <p>
          <?= $outil_3['intro'] ?>
        </p>
        <?php if ($outil_3['link_texte']) : ?>
        <a type="button" data-toggle="modal" data-target="#outil_3" class="esp">
          <?= $outil_3['link_texte'] ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>

    <!-- Outils 4 -->
    <?php if ($outil_4['titre']) : ?>
    <div class="swiper-slide">
      <div class="card card-body outil">
        <h3>
          <?= $outil_4['titre'] ?>
        </h3>
        <p>
          <?= $outil_4['intro'] ?>
        </p>
        <?php if ($outil_4['link_texte']) : ?>
        <a type="button" data-toggle="modal" data-target="#outil_4" class="esp">
          <?= $outil_4['link_texte'] ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>

    <!-- Outils 1 -->
    <?php if ($outil_5['titre']) : ?>
    <div class="swiper-slide">
      <div class="card card-body outil">
        <h3>
          <?= $outil_5['titre'] ?>
        </h3>
        <p>
          <?= $outil_5['intro'] ?>
        </p>
        <?php if ($outil_5['link_texte']) : ?>
        <a type="button" data-toggle="modal" data-target="#outil_5" class="esp">
          <?= $outil_5['link_texte'] ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>

    <!-- Outils 6 -->
    <?php if ($outil_6['titre']) : ?>
    <div class="swiper-slide">
      <div class="card card-body outil">
        <h3>
          <?= $outil_6['titre'] ?>
        </h3>
        <p>
          <?= $outil_6['intro'] ?>
        </p>
        <?php if ($outil_6['link_texte']) : ?>
        <a type="button" data-toggle="modal" data-target="#outil_6" class="esp">
          <?= $outil_6['link_texte'] ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>

  </div>

  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>