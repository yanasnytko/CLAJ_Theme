<?php
$outil_1 = get_field('outil_1');
$outil_2 = get_field('outil_2');
$outil_3 = get_field('outil_3');
$outil_4 = get_field('outil_4');
$outil_5 = get_field('outil_5');
$outil_6 = get_field('outil_6');
?>

<!-- Outil 1 -->
<div class="modal fade" id="outil_1" tabindex="-1" aria-labelledby="outil_1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="outil_1_nom"><?= $outil_1['titre'] ?></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?= $outil_1['url'] ?>" alt="">
        <?= $outil_1['texte'] ?>
      </div>
      <div class="modal-footer">
        <?php if ($outil_1['link_ext']) : ?>
        <a href="<?= $outil_1['link_ext'] ?>" class="btn btn-light" target="blanket">
          <?= $outil_1['link_texte_ext'] ?>
        </a>
        <?php endif; ?>
        <?php if ($outil_1['pdf']) : ?>
        <a href="<?= $outil_1['pdf'] ?>" class="btn btn-light" target="blanket">
          <?= $outil_1['pdf_texte'] ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<!-- Outil 2 -->
<div class="modal fade" id="outil_2" tabindex="-1" aria-labelledby="outil_2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="outil_2_nom"><?= $outil_2['titre'] ?></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?= $outil_2['url'] ?>" alt="">
        <?= $outil_2['texte'] ?>
      </div>
      <div class="modal-footer">
        <?php if ($outil_2['link_ext']) : ?>
        <a href="<?= $outil_2['link_ext'] ?>" class="btn btn-light" target="blanket">
          <?= $outil_2['link_texte_ext'] ?>
        </a>
        <?php endif; ?>
        <?php if ($outil_2['pdf']) : ?>
        <a href="<?= $outil_2['pdf'] ?>" class="btn btn-light" target="blanket">
          <?= $outil_2['pdf_texte'] ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<!-- Outil 3 -->
<div class="modal fade" id="outil_3" tabindex="-1" aria-labelledby="outil_3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="outil_3_nom"><?= $outil_3['titre'] ?></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?= $outil_3['url'] ?>" alt="">
        <?= $outil_3['texte'] ?>
      </div>
      <div class="modal-footer">
        <?php if ($outil_3['link_ext']) : ?>
        <a href="<?= $outil_3['link_ext'] ?>" class="btn btn-light" target="blanket">
          <?= $outil_3['link_texte_ext'] ?>
        </a>
        <?php endif; ?>
        <?php if ($outil_3['pdf']) : ?>
        <a href="<?= $outil_3['pdf'] ?>" class="btn btn-light" target="blanket">
          <?= $outil_3['pdf_texte'] ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<!-- Outil 4 -->
<div class="modal fade" id="outil_4" tabindex="-1" aria-labelledby="outil_4" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="outil_4_nom"><?= $outil_4['titre'] ?></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?= $outil_4['url'] ?>" alt="">
        <?= $outil_4['texte'] ?>
      </div>
      <div class="modal-footer">
        <?php if ($outil_4['link_ext']) : ?>
        <a href="<?= $outil_4['link_ext'] ?>" class="btn btn-light" target="blanket">
          <?= $outil_4['link_texte_ext'] ?>
        </a>
        <?php endif; ?>
        <?php if ($outil_4['pdf']) : ?>
        <a href="<?= $outil_4['pdf'] ?>" class="btn btn-light" target="blanket">
          <?= $outil_4['pdf_texte'] ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<!-- Outil 5 -->
<div class="modal fade" id="outil_5" tabindex="-1" aria-labelledby="outil_5" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="outil_5_nom"><?= $outil_5['titre'] ?></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?= $outil_5['url'] ?>" alt="">
        <?= $outil_5['texte'] ?>
      </div>
      <div class="modal-footer">
        <?php if ($outil_5['link_ext']) : ?>
        <a href="<?= $outil_5['link_ext'] ?>" class="btn btn-light" target="blanket">
          <?= $outil_5['link_texte_ext'] ?>
        </a>
        <?php endif; ?>
        <?php if ($outil_5['pdf']) : ?>
        <a href="<?= $outil_5['pdf'] ?>" class="btn btn-light" target="blanket">
          <?= $outil_5['pdf_texte'] ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<!-- Outil 6 -->
<div class="modal fade" id="outil_6" tabindex="-1" aria-labelledby="outil_6" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="outil_6_nom"><?= $outil_6['titre'] ?></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?= $outil_6['url'] ?>" alt="">
        <?= $outil_1['texte'] ?>
      </div>
      <div class="modal-footer">
        <?php if ($outil_6['link_ext']) : ?>
        <a href="<?= $outil_6['link_ext'] ?>" class="btn btn-light" target="blanket">
          <?= $outil_6['link_texte_ext'] ?>
        </a>
        <?php endif; ?>
        <?php if ($outil_6['pdf']) : ?>
        <a href="<?= $outil_6['pdf'] ?>" class="btn btn-light" target="blanket">
          <?= $outil_6['pdf_texte'] ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>