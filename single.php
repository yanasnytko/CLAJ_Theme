<?php get_header(); ?>

<div class="col-12">

  <div class="blog-post">
    <h2 class="blog-post-title">
      <?php the_title(); ?>
    </h2>
    <div>
      <?php the_post_thumbnail(); ?>
    </div>
    <?php the_content(); ?>

  </div>
  <?php
  /* if (comments_open() || get_comments_number()) :
    comments_template();
  endif; */
  comments_template();
  ?>

</div>

<?php get_footer(); ?>