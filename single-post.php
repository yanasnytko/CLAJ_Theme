<!-- La page d'un article -->

<?php get_header(); ?>

<div class="col-12">

  <div class="blog-post">
    <h2 class="blog-post-title">
      <?php the_title(); ?>
    </h2>

    <?php if (has_post_thumbnail()) : ?>

    <img src="<?php the_post_thumbnail_url('largest'); ?>" alt="<?php the_post_thumbnail_caption(); ?>"
      class="img-fluid">

    <?php endif; ?>

    <?php the_content(); ?>
  </div>

</div>

<?php get_footer(); ?>