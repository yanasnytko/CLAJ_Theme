<div class="col-12">
  <?php
  $puzzle_image = get_field('puzzle_image');

  $puzzle_1 = get_field('puzzle_1');
  $puzzle_2 = get_field('puzzle_2');
  $puzzle_3 = get_field('puzzle_3');
  $puzzle_4 = get_field('puzzle_4');
  ?>

  <a href="<?= $puzzle_1['link']['url'] ?>">
    <h3>
      <?= $puzzle_1['titre'] ?>
    </h3>
  </a>
  <a href="<?= $puzzle_1['link']['url'] ?>">
    <p>
      <?= $puzzle_1['texte'] ?>
    </p>
  </a>

  <a href="<?= $puzzle_2['link']['url'] ?>">
    <h3>
      <?= $puzzle_2['titre'] ?>
    </h3>
  </a>
  <a href="<?= $puzzle_2['link']['url'] ?>">
    <p>
      <?= $puzzle_2['texte'] ?>
    </p>
  </a>

  <a href="<?= $puzzle_3['link']['url'] ?>">
    <h3>
      <?= $puzzle_3['titre'] ?>
    </h3>
  </a>
  <a href="<?= $puzzle_3['link']['url'] ?>">
    <p>
      <?= $puzzle_3['texte'] ?>
    </p>
  </a>

  <a href="<?= $puzzle_4['link']['url'] ?>">
    <h3>
      <?= $puzzle_4['titre'] ?>
    </h3>
  </a>
  <a href="<?= $puzzle_4['link']['url'] ?>">
    <p>
      <?= $puzzle_4['texte'] ?>
    </p>
  </a>

  <img src="<?php echo $puzzle_image['url'] ?>" alt="<?= $puzzle_image['caption'] ?>" class="rounded img-fluid">
</div>