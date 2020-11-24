<div class="col-12 puzzle" id="puzzle">
  <?php
  $puzzle_image = get_field('puzzle_image');

  $puzzle_1 = get_field('puzzle_1');
  $puzzle_2 = get_field('puzzle_2');
  $puzzle_3 = get_field('puzzle_3');
  $puzzle_4 = get_field('puzzle_4');
  ?>

  <a href="<?= $puzzle_1['link']['url'] ?>">
    <div id="jeune">
      <h3>
        <?= $puzzle_1['titre'] ?>
      </h3>
      <p class="puzzle-texte">
        <?= $puzzle_1['texte'] ?>
      </p>
    </div>
  </a>

  <a href="<?= $puzzle_2['link']['url'] ?>">
    <div id="famille">
      <h3>
        <?= $puzzle_2['titre'] ?>
      </h3>
      <p class="puzzle-texte">
        <?= $puzzle_2['texte'] ?>
      </p>
    </div>
  </a>

  <a href="<?= $puzzle_3['link']['url'] ?>">
    <div id="milieu">
      <h3>
        <?= $puzzle_3['titre'] ?>
      </h3>
      <p class="puzzle-texte">
        <?= $puzzle_3['texte'] ?>
      </p>
    </div>
  </a>

  <a href="<?= $puzzle_4['link'] ?>">
    <div id="ecole">
      <h3>
        <?= $puzzle_4['titre'] ?>
      </h3>
      <p class="puzzle-texte">
        <?= $puzzle_4['texte'] ?>
      </p>
    </div>
  </a>
  <img src="<?php echo $puzzle_image['url'] ?>" alt="<?= $puzzle_image['caption'] ?>" class="rounded img-fluid"
    id="puzzle-illu">
</div>