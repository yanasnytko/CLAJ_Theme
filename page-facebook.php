<!-- Page Facebook, avec les posts de Facebook de CLAJ -->

<?php get_header(); ?>

<h1>
  <?php the_title(); ?>
</h1>

<div class="col-12">

  <div class="blog-post">
    <h2 class="blog-post-title">
      Custom Post Test (<?php the_title(); ?>)
    </h2>
    <?php

    $args = array(
      'post_type' => 'your_post',
    );
    $your_loop = new WP_Query($args);

    if ($your_loop->have_posts()) : while ($your_loop->have_posts()) : $your_loop->the_post();
        $meta = get_post_meta($post->ID, 'your_fields', true); ?>

    <!-- contents of Your Post -->
    <h3 class="blog-post-title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>
    <div>
      <?php the_post_thumbnail(); ?>
    </div>
    <?php the_content(); ?>

    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>
  </div>

</div>

<?php get_footer(); ?>