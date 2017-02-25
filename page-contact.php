<?php get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <section class="single-section no-padding-bottom">
        <?php echo do_shortcode('[ninja_form id=1]') ?>
        <div class="black-box">
          <p>Don't like forms? Shoot us an email</p>
          <a class="button">hello@socialornothing.com</a>
          <p>Or, let's chat.</p>
          <a>778.822.1408</a>
        </div>

        <div id="map-container">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFMqQQFaW-hbKf3bAbCjWwyrEMd_-5Ei4&callback=initMap"
    async defer></script>
        <div id="map" style="height: 100%; width: 100%;"></div>
            <script>
              var map;
              var center = {lat: 49.285, lng: -123.106};

              if(window.innerWidth >= 768){
                console.log(window.innerWidth);
                center = {lat: 49.285, lng: -123.125};
              }



              function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                  center: center,
                  zoom: 14,
                  disableDefaultUI: true,
                  scrollwheel: false,
                  styles: [{
                    "featureType": "all",
                    "elementType": "geometry",
                    "stylers": [{
                      "color": "#e10023"
                    }]
                  },{
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                      "color": "#e10023"
                    }]
                  },{
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                      "color": "#eb677c"
                    }]
                  },{
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [{
                      "color": "#eb677c"
                    },{
                      "saturation": "0"
                    },{
                      "lightness": "-0"
                    },{
                      "gamma": "1"
                    }]
                  },
                  {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                      "color": "#fae0e5"
                    }]
                  }]
                });

            var customIcon = {
                url: '<?php echo get_template_directory_uri() . '/dist/img/pin.png' ?>',
                scaledSize: new google.maps.Size(150,150)
            }

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(49.280,-123.106),
                icon: customIcon,
                map: map
            });

              }
        google.maps.event.addDomListener(window, "resize", function() {
           var center = map.getCenter();
           google.maps.event.trigger(map, "resize");
           map.setCenter(center); 
        });
        </script>
        </div>
      </section>
    </div>
  </div>
</div>
<?php get_footer(); ?>