</div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">

  <div>
    <h4>
      <?= get_option('nom'); ?>
    </h4>
    <address>
      <?= get_option('adresse'); ?>
    </address>
    <a href="tel:<?= get_option('tel'); ?>"><?= get_option('tel'); ?></a>
    <a href="mailto:<?= get_option('mail'); ?>"><?= get_option('mail'); ?></a>
  </div>

  <div>
    <h4>
      <?= get_option('titre_urgence'); ?>
    </h4>
    <a href="tel:<?= get_option('tel_urgence'); ?>"><?= get_option('tel_urgence'); ?></a>
  </div>

  <div>
    <h4>
      <?= get_option('titre_liens'); ?>
    </h4>
    <a href="<?= get_option('facebook'); ?>" target="_blank">Facebook de CLAJ</a>
  </div>

  <div>
    <a href="<?= get_option('fwb'); ?>" target="_blank">Site de Fédération Wallonie-Bruxelles</a>
  </div>

  <?php
  if (is_active_sidebar('footer_copyright_text')) {
    dynamic_sidebar('footer_copyright_text');
  }
  ?>
</footer>

<?php wp_footer(); ?>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- <script>
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 4,
  centeredSlides: true,
  spaceBetween: 30,
  grabCursor: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});
</script> -->

<script>
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 4,
  spaceBetween: 30,
  centeredSlides: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});
</script>

</body>

</html>