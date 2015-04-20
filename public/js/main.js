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
			width: 200,
			closingLinks: 'a',
		}
	});

  var latlng = new google.maps.LatLng(-89.533333,13.983333);

 
  var options = {
    zoom: 15,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    navigationControl: true,
    mapTypeControl: false,
    scrollwheel: false,
    disableDoubleClickZoom: true
  };

  
  var map=new google.maps.Map(document.getElementById('google_map'), options);

  
  var marker1=new google.maps.Marker({
    position: latlng, map: map
  });

 
  google.maps.event.addListener(marker1, 'click', function() {
    infowindow.open(map, marker1);
  });

  
  var infowindow = new google.maps.InfoWindow({
    content:  '<div class="info"><strong>Ues-occ</strong><br><br>Edificio de usosmultiples<br>3er nivel</div>'
  });  
});

//animaciones

$('#head1').addClass('animated fadeInDownBig');
$('#subhead').addClass('animated fadeInUp');
$('#vi').addClass('animated slideInup');
$('#mi').addClass('animated flipInUp');

$( "#about" ).click(function() {
 $('#des').addClass('animated flip');
});

