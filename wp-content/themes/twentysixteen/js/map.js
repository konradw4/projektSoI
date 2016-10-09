var mapa;

function mapaInit(){
	var coordinates = new google.maps.LatLng(50.0803535,19.94497990000002);
	var opcjeMapy = {
	  zoom: 13,
	  center: coordinates,
	};
	mapa = new google.maps.Map(document.getElementById("map"), opcjeMapy);
}
function setMarker(){
    var point = new google.maps.LatLng(50.0803535,19.94497990000002);
    var markerOptions =
    {
      position: point,
      map: mapa,
      title: 'SoInteractive'
    }
    var marker = new google.maps.Marker(markerOptions);
}

$(document).ready(function(){
  mapaInit();
  setMarker();
});
