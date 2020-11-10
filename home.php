<!-- La page du BLOG, sera remplacée par la Page Facebook -->
<?php get_header(); ?>

<h1>
  <?php single_cat_title(); ?>
</h1>

<div class="col-12">

  <?php
  if (have_posts()) {
    while (have_posts()) : the_post();
  ?>

  <div class="card card-body">
    <h2>
      <?php the_title(); ?>
    </h2>
    <p>
      <?php the_date(); ?> by <?php the_author(); ?>,
      <a href="<?php comments_link(); ?>">
        <?php printf(_nx('One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain'), number_format_i18n(get_comments_number())); ?>
      </a>
    </p>
    <?php if (has_post_thumbnail()) : ?>

    <img src="<?php the_post_thumbnail_url('smallest'); ?>" alt="<?php the_post_thumbnail_caption(); ?>"
      class="img-fluid">

    <?php endif; ?>
    <?php the_excerpt(); ?>

    <a href="<?php the_permalink(); ?>" class="btn btn-success">Read more</a>

  </div>

  <?php
    endwhile;
  }
  ?>

  <nav>
    <!-- <ul class="pager">
      <li><?php //next_posts_link('Previous');
          ?></li>
      <li><?php //previous_posts_link('Next');
          ?></li>
    </ul> -->

    <?php wpbeginner_numeric_posts_nav(); ?>
  </nav>
</div>


<?php get_footer(); ?>