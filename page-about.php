<!-- Page A Propos -->

<?php get_header(); ?>

<div class="col-12">

  <h1>
    <?php the_title(); ?>
  </h1>

  <!-- Desription -->
  <div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6">

        <?php
        $description = get_field('description');
        $desription_image = $description['description_image'];
        ?>
        
      
        <p>
          <?= $description['description_texte'] ?>
        </p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <img src="<?= $desription_image['url'] ?>" alt="<?= $desription_image['caption'] ?>"class="rounded img-fluid">
        </div>

      </div>
  </div>
  </div>

  <!-- Notre Mission -->
  <div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6">
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
      <div class="col-sm-12 col-md-6 col-lg-6 ">
      </div>

    </div>
  </div>
  </div>

  <!-- Nos publics cibles -->
  <div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 ">

          <?php
          $publics = get_field('publics');
          $publics_image = $publics['publics_image'];
          ?>

          <img src="<?= $publics_image['url'] ?>" alt="<?= $publics_image['caption'] ?>"class="rounded img-fluid">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 ">


          <h2>
            <?= $publics['publics_titre'] ?>
          </h2>
          <p>
            <?= $publics['publics_texte'] ?>
          </p>

          <?php if ($publics['publics_link']) : ?>
          <a href="<?= $publics['publics_link']['url'] ?>"class="btn btn-success">
            <?= $publics['publics_link_text'] ?>
          </a>
          <?php endif; ?>
        </div>


    </div>
  </div>
  </div>

  <!-- Une antenne à proximité -->

  <div>
  

        <?php get_template_part('parts/antennes'); ?>
      </div>
    </div>
  </div>
  </div>

  <!-- Confidentialité et gratuité -->
  <div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 ">

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
      <div class="col-sm-12 col-md-6 col-lg-6 ">
      </div>
    </div>
  </div>
  </div>

  <!-- Nos partenaires -->
  <div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 ">
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
        <a href="<?= $partenaires['partenaires_link'] ?>" class="btn btn-success">
          <?= $partenaires['partenaires_link_texte'] ?>
        </a>
        <?php endif; ?>
      </div>
        <img src="<?= $partenaires_image['url'] ?>" alt="<?= $partenaires_image['caption'] ?>"class="rounded img-fluid">
  </div>


  </div>
</div>
</div>

<?php get_footer(); ?>