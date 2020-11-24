</div><!-- /.row -->

</div><!-- /.container -->

<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#4B9228" fill-opacity="1"
    d="M0,288L80,261.3C160,235,320,181,480,181.3C640,181,800,235,960,245.3C1120,256,1280,224,1360,208L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
    data-darkreader-inline-fill="" style="--darkreader-inline-fill:#4B9228;"></path>
</svg> -->

<!-- <footer class="footer">

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="footer-contact">
          <h4>
            <?= get_option('nom'); ?>
          </h4>
          <address>
            <?= get_option('adresse'); ?>
          </address>
          <a class="text-light" href="tel:<?= get_option('tel'); ?>"><?= get_option('tel'); ?></a> <br>
          <a class="text-light" href="mailto:<?= get_option('mail'); ?>"><?= get_option('mail'); ?></a>
        </div>
      </div>

      <div class="col">
        <div class="footer-numero">
          <h4>
            <?= get_option('titre_urgence'); ?>
          </h4>
          <a class="text-light" href="tel:<?= get_option('tel_urgence'); ?>"><?= get_option('tel_urgence'); ?></a>
        </div>
      </div>

      <div class="col">
        <div class="footer-plan">
          <h4>
            Plan du site
          </h4>
          <p>
            Accueil</br>
            A propos</br>
            Partenaires</br>
            Pour qui, pour quoi?</br>
            Outils</br>
            Actualités</br>
            Contact</br>
            Politique de</br>
            confidentialité
          </p>
        </div>
      </div>

      <div class="col">
        <div class="footer-adresses">
          <p>
            Outremeuse</br>
            Centre-ville</br>
            Droixhe</br>
            Sainte-Marguerite</br>
            Sainte-Walburge</br>
            Vennes</br>
          </p>
        </div>
      </div>

      <div class="col">
        <div class="footer-social">
          <h4>
            <?= get_option('titre_liens'); ?>
          </h4>
          <a class="text-light" href="<?= get_option('facebook'); ?>" target="_blank">Facebook de CLAJ</a>
        </div>
      </div>

      <div class="col">
        <div class="footer-logo-fed">
          <a class="text-light" href="<?= get_option('fwb'); ?>" target="_blank">Site de Fédération
            Wallonie-Bruxelles</a>
        </div>
        <div class="footer-copy">
          <p>CLAJ AMO 2020</p>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-12">
        <div class="image-ville">
          <img src="">
        </div>
      </div>
    </div>
  </div>

</footer> -->

<footer class="footer">

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="footer-contact">
          <?php
          dynamic_sidebar('footer-1');
          ?>
        </div>
      </div>

      <div class="col">
        <div class="footer-numero">
          <?php
          dynamic_sidebar('footer-2');
          ?>
        </div>
      </div>

      <div class="col">
        <div class="footer-plan">
          <?php
          dynamic_sidebar('footer-3');
          ?>
        </div>
      </div>

      <div class="col">
        <div class="footer-adresses">
          <?php
          dynamic_sidebar('footer-4');
          ?>
        </div>
      </div>

      <div class="col">
        <div class="footer-social">
          <?php
          dynamic_sidebar('footer-5');
          ?>
        </div>
      </div>

      <div class="col">
        <div class="footer-logo-fed">
          <?php
          dynamic_sidebar('footer-6');
          ?>
        </div>

      </div>

    </div>
    <div class="row">
      <div class="col-12">
        <div class="image-ville">
          <img src="">
        </div>
      </div>
    </div>
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