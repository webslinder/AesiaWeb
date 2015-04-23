jQuery(document).ready(function() {
  $(".sidebar").simpleSidebar({
    settings: {
      opener: "#open",
      wrapper: ".wrapper",
      animation: {
        easing: "easeOutQuint"
      }
    },
    sidebar: {
      align: "right",
      width: 600,
      closingLinks: 'a',
    }
  });

  //Mapa
  L.mapbox.accessToken = 'pk.eyJ1IjoiYWdvZGluZXoiLCJhIjoiUy1oX2lnWSJ9.hENhR46xWhRyMH4DXipdBg';
  var map = L.mapbox.map('map', 'agodinez.m07oo184')
    .setView([13.97, -89.574], 17);

    map.featureLayer.on('click', function(e) {
        map.panTo(e.layer.getLatLng());
    });

  // L.marker is a low-level marker constructor in Leaflet.
  L.marker([13.97, -89.574], {
    icon: L.mapbox.marker.icon({
      'marker-size': 'large',
      'marker-symbol': 'circle',
      'marker-color': '#f86767'
    })
  })
  .bindPopup('<p><strong>UES FMOcc</strong><br />Edificio de usos multiples, 3ra Planta.</p>')
  .addTo(map);

  map.scrollWheelZoom.disable();
  if (map.tap) {
    map.tap.disable()
  };

  



  //animaciones
  $('#head1').addClass('animated fadeInDownBig');
  $('#subhead').addClass('animated fadeInUp');
  $('#vi').addClass('animated slideInup');
  $('#mi').addClass('animated flipInUp');
  $("#about").click(function() {
    $('#des').addClass('animated flip');
  });
  //Navegacion



  $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body').animate({
          scrollTop: targetOffset
        }, 1000);
        return false;
      }
    }
  });

});