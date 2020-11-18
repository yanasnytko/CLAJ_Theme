<!-- Le carousselles de toutes les antennes -->
<?php
$antennes = get_field('antennes');
?>
<div class="row">
  <h2>
    <?= $antennes['antennes_titre'] ?>
  </h2>
  <h2>
    <?= $antennes['titre'] ?>
  </h2>
  <p>
    <?= $antennes['antennes_texte'] ?>
  </p>
</div>

<div class="swiper-container row">

  <div class="swiper-wrapper">

    <!-- Antenne 1 -->
    <?php if ($antennes['antenne_1']['nom']) : ?>
    <div class="card card-body swiper-slide">
      <?php
        $antenne_1 = $antennes['antenne_1'];
        ?>
      <h3>
        <?= $antenne_1['nom'] ?>
      </h3>
      <p>
        <?= $antenne_1['autre_nom'] ?>
      </p>
      <address>
        <?= $antenne_1['adresse'] ?>
      </address>
      <a href="tel:<?= $antenne_1['tel'] ?>"><?= $antenne_1['tel'] ?></a>
      <a href="mailto:<?= $antenne_1['mail'] ?>"><?= $antenne_1['mail'] ?></a>

      <?php if ($antenne_1['link']) : ?>
      <a href="<?= $antenne_1['link']['url'] ?>">
        <?= $antenne_1['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>
    <?php endif; ?>

    <!-- Antenne 2-->
    <?php if ($antennes['antenne_2']['nom']) : ?>
    <div class="card card-body swiper-slide">
      <?php
        $antenne_2 = $antennes['antenne_2'];
        ?>
      <h3>
        <?= $antenne_2['nom'] ?>
      </h3>
      <p>
        <?= $antenne_2['autre_nom'] ?>
      </p>
      <address>
        <?= $antenne_2['adresse'] ?>
      </address>
      <a href="tel:<?= $antenne_2['tel'] ?>"><?= $antenne_2['tel'] ?></a>
      <a href="mailto:<?= $antenne_2['mail'] ?>"><?= $antenne_2['mail'] ?></a>

      <?php if ($antenne_2['link']) : ?>
      <a href="<?= $antenne_2['link']['url'] ?>">
        <?= $antenne_2['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>
    <?php endif; ?>

    <!-- Antenne 3-->
    <?php if ($antennes['antenne_3']['nom']) : ?>
    <div class="card card-body swiper-slide">
      <?php
        $antenne_3 = $antennes['antenne_3'];
        ?>
      <h3>
        <?= $antenne_3['nom'] ?>
      </h3>
      <p>
        <?= $antenne_3['autre_nom'] ?>
      </p>
      <address>
        <?= $antenne_3['adresse'] ?>
      </address>
      <a href="tel:<?= $antenne_3['tel'] ?>"><?= $antenne_3['tel'] ?></a>
      <a href="mailto:<?= $antenne_3['mail'] ?>"><?= $antenne_3['mail'] ?></a>

      <?php if ($antenne_3['link']) : ?>
      <a href="<?= $antenne_3['link']['url'] ?>">
        <?= $antenne_3['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>
    <?php endif; ?>

    <!-- Antenne 4-->
    <?php if ($antennes['antenne_4']['nom']) : ?>
    <div class="card card-body swiper-slide">
      <?php
        $antenne_4 = $antennes['antenne_4'];
        ?>
      <h3>
        <?= $antenne_4['nom'] ?>
      </h3>
      <p>
        <?= $antenne_4['autre_nom'] ?>
      </p>
      <address>
        <?= $antenne_4['adresse'] ?>
      </address>
      <a href="tel:<?= $antenne_4['tel'] ?>"><?= $antenne_4['tel'] ?></a>
      <a href="mailto:<?= $antenne_4['mail'] ?>"><?= $antenne_4['mail'] ?></a>

      <?php if ($antenne_4['link']) : ?>
      <a href="<?= $antenne_4['link']['url'] ?>">
        <?= $antenne_4['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>
    <?php endif; ?>

    <!-- Antenne 5-->
    <?php if ($antennes['antenne_5']['nom']) : ?>
    <div class="card card-body swiper-slide">
      <?php
        $antenne_5 = $antennes['antenne_5'];
        ?>
      <h3>
        <?= $antenne_5['nom'] ?>
      </h3>
      <p>
        <?= $antenne_5['autre_nom'] ?>
      </p>
      <address>
        <?= $antenne_5['adresse'] ?>
      </address>
      <a href="tel:<?= $antenne_5['tel'] ?>"><?= $antenne_5['tel'] ?></a>
      <a href="mailto:<?= $antenne_5['mail'] ?>"><?= $antenne_5['mail'] ?></a>

      <?php if ($antenne_5['link']) : ?>
      <a href="<?= $antenne_5['link']['url'] ?>">
        <?= $antenne_5['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>
    <?php endif; ?>

    <!-- Antenne 6-->
    <?php if ($antennes['antenne_6']['nom']) : ?>
    <div class="card card-body swiper-slide">
      <?php
        $antenne_6 = $antennes['antenne_6'];
        ?>
      <h3>
        <?= $antenne_6['nom'] ?>
      </h3>
      <p>
        <?= $antenne_6['autre_nom'] ?>
      </p>
      <address>
        <?= $antenne_6['adresse'] ?>
      </address>
      <a href="tel:<?= $antenne_6['tel'] ?>"><?= $antenne_6['tel'] ?></a>
      <a href="mailto:<?= $antenne_6['mail'] ?>"><?= $antenne_6['mail'] ?></a>

      <?php if ($antenne_6['link']) : ?>
      <a href="<?= $antenne_6['link']['url'] ?>">
        <?= $antenne_6['link_texte'] ?>
      </a>
      <?php endif; ?>
    </div>
    <?php endif; ?>

  </div>

  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>