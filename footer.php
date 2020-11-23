</div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 text-light mx-auto py-4">
        <h4>
          <?= get_option('nom'); ?>
        </h4>
        <address>
          <?= get_option('adresse'); ?>
        </address>
        <a class="text-light" href="tel:<?= get_option('tel'); ?>"><?= get_option('tel'); ?></a>
        <a class="text-light" href="mailto:<?= get_option('mail'); ?>"><?= get_option('mail'); ?></a>
      </div>

      <div class="col-sm-12 col-md-3 col-lg-3 text-light mx-auto py-4">
        <h4>
          <?= get_option('titre_urgence'); ?>
        </h4>
        <a class="text-light" href="tel:<?= get_option('tel_urgence'); ?>"><?= get_option('tel_urgence'); ?></a>
      </div>

      <div class="col-sm-12 col-md-3 col-lg-3 text-light mx-auto py-4">
        <h4>
          <?= get_option('titre_liens'); ?>
        </h4>
        <a class="text-light" href="<?= get_option('facebook'); ?>" target="_blank">Facebook de CLAJ</a>
      </div>

      <div class="col-sm-12 col-md-3 col-lg-3 text-light mx-auto py-4">
        <a class="text-light" href="<?= get_option('fwb'); ?>" target="_blank">Site de Fédération Wallonie-Bruxelles</a>
      </div>

      <!-- <div class="col-sm-12 col-md-3 col-lg-3 text-light mx-auto py-4">
        <?php
        /* if (is_active_sidebar('footer_copyright_text')) {
          dynamic_sidebar('footer_copyright_text');
        } */
        ?>
      </div> -->
    </div>
    <!-- <div class="row">
      <div class="col-12">
        image de la ville <img>
      </div>
    </div> -->
  </div>

</footer>

<?php wp_footer(); ?>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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


<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script type="text/javascript">
(function($) {

  /**
   * initMap
   *
   * Renders a Google Map onto the selected jQuery element
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   jQuery $el The jQuery element.
   * @return  object The map instance.
   */
  function initMap($el) {

    // Find marker elements within map.
    var $markers = $el.find('.marker');

    // Create gerenic map.
    var mapArgs = {
      zoom: $el.data('zoom') || 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map($el[0], mapArgs);

    // Add markers.
    map.markers = [];
    $markers.each(function() {
      initMarker($(this), map);
    });

    // Center map based on markers.
    centerMap(map);

    // Return map instance.
    return map;
  }

  /**
   * initMarker
   *
   * Creates a marker for the given jQuery element and map.
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   jQuery $el The jQuery element.
   * @param   object The map instance.
   * @return  object The marker instance.
   */
  function initMarker($marker, map) {

    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = {
      lat: parseFloat(lat),
      lng: parseFloat(lng)
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
      position: latLng,
      map: map
    });

    // Append to reference for later use.
    map.markers.push(marker);

    // If marker contains HTML, add it to an infoWindow.
    if ($marker.html()) {

      // Create info window.
      var infowindow = new google.maps.InfoWindow({
        content: $marker.html()
      });

      // Show info window when marker is clicked.
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
      });
    }
  }

  /**
   * centerMap
   *
   * Centers the map showing all markers in view.
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   object The map instance.
   * @return  void
   */
  function centerMap(map) {

    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function(marker) {
      bounds.extend({
        lat: marker.position.lat(),
        lng: marker.position.lng()
      });
    });

    // Case: Single marker.
    if (map.markers.length == 1) {
      map.setCenter(bounds.getCenter());

      // Case: Multiple markers.
    } else {
      map.fitBounds(bounds);
    }
  }

  // Render maps on page load.
  $(document).ready(function() {
    $('.acf-map').each(function() {
      var map = initMap($(this));
    });
  });
  /* google.maps.event.trigger(map, 'resize'); */
})(jQuery);
</script>

</body>

</html>