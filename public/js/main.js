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

  // Provide your access token
L.mapbox.accessToken = 'pk.eyJ1IjoiYWdvZGluZXoiLCJhIjoiUy1oX2lnWSJ9.hENhR46xWhRyMH4DXipdBg';
// Create a map in the div #map
L.mapbox.map('map', 'agodinez.lk8i9341');

  /* mapa
var map = L.map('map').setView([13.970956, -89.574815], 17);

// add an OpenStreetMap tile layer
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', { //'http://{s}.tiles.mapbox.com/v3/MapID/{z}/{x}/{y}.png'
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// add a marker in the given location, attach some popup content to it and open the popup
L.marker([13.970956, -89.574815]).addTo(map)
    .bindPopup('3ra planta del Edificio de Usos Multiples, UES FMOcc')
    .openPopup();*/


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
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
      && location.hostname == this.hostname) {
        var $target = $(this.hash);
          $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
          if ($target.length) {
            var targetOffset = $target.offset().top;
              $('html,body').animate({scrollTop: targetOffset}, 1000);
              return false;
          }
    }
  });
  
});