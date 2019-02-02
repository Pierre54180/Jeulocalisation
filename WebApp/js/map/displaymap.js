var first = null;
var second = null;

var mymap = L.map('Maps').setView([50.34, 11.52], 5.5);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw', {
	minZoom: 4,
	maxZoom: 5,
	attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
	'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
	'Imagery © <a href="http://mapbox.com">Mapbox</a>',
	id: 'mapbox.streets'
}).addTo(mymap);

function onMapClick(e) {
	L.marker([e.latlng["lat"], e.latlng["lng"]]).addTo(mymap).bindPopup( e.latlng["lat"].toFixed(2).toString() +" "+ e.latlng["lng"].toFixed(2).toString()).openPopup();
	first = second;
	second = e.latlng;
	addLine(first, second);
};

function addLine(first,second){
	var mylines = [[first.lat, first.lng], [second.lat, second.lng]];

	var myStyle = {
		"color": "#ff7800",
		"weight": 5,
    	"opacity": 0.65
	};

	console.log(mymap.distance(first, second));

	L.polyline(mylines, {
		style: myStyle
	}).addTo(mymap);
};	
mymap.on('click', onMapClick);