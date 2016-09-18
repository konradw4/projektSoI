var mapa;

function mapaInit(){
	var coordinates = new google.maps.LatLng(50.0803535,19.94497990000002);
	var opcjeMapy = {
	  zoom: 13,
	  center: coordinates,
	  // mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	mapa = new google.maps.Map(document.getElementById("map"), opcjeMapy);
}
function carousel(){
    $('.carousel').carousel({
    interval: 3000
  });
}
function setMarker(){
    var tooltip = new google.maps.InfoWindow();;
    var point = new google.maps.LatLng(50.0803535,19.94497990000002);
    var markerOptions =
    {
      position: point,
      map: mapa,
      title: 'SoInteractive'
    }
    var marker = new google.maps.Marker(markerOptions);
    marker.txt = '<strong>SoInteractive</strong><br/>Jesteśmy tutaj';
    tooltip.setContent(marker.txt);
    tooltip.open(mapa,marker);
}

$(document).ready(function(){
  carousel();
  mapaInit();
  setMarker();
});
