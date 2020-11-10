<!-- Page Outils -->

<?php get_header(); ?>

<h1>
  <?php the_title(); ?>
</h1>

<div class="col-12">

  <!-- Test avec le Custom Post -->
  <?php
  $args =  array(
    'post_type' => 'my-custom-post',
    'orderby' => 'menu_order',
    'order' => 'ASC'
  );

  $custom_query = new WP_Query($args);
  while ($custom_query->have_posts()) : $custom_query->the_post();
    // Contents of the custom Loop
  ?>
  <h3 class="blog-post-title">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h3>
  <div>
    <?php the_post_thumbnail(); ?>
  </div>
  <?php the_excerpt(); ?>
  <?php endwhile; ?>

</div>

<?php get_footer(); ?>