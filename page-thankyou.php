<!-- Page de remerciement de mail envoyé -->

<?php get_header(); ?>

<div class="col-12">

  <!-- Test pour Page Thank You enregistré via Custom Settings -->
  <div>
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
      <li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
    </ol>
  </div>

</div>

<?php get_footer(); ?>