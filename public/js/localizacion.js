var map;
var json = [{
	"id": 48,
	"title": "FUNDACION SAN JUAN BAUTISTA",
	"longitude": "-79.8332905",
	"latitude": "-3.245050"
}];
var texto = "<h1>san juan<h1>";

function init() {

	var mapOption = {
		center: new google.maps.LatLng(-3.245050, -79.833290),
		zoom: 19,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById("mapa"), mapOption);

	// Looping through all the entries from the JSON data
	for (var i = 0; i < json.length; i++) {

		// Current object
		var obj = json[i];

		// Adding a new marker for the object
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(obj.latitude, obj.longitude),
			map: map,
			title: obj.title
		});
	}
}
google.maps.event.addDomListener(window, 'load', init);
