var myOptions;
var map;
var geoXml;

google.maps.event.addDomListener(window, 'resize', function() {
	var center = map.getCenter()
	google.maps.event.trigger(map, "resize")
	map.setCenter(center)

	var centerC1 = mapC1.getCenter()
	google.maps.event.trigger(mapC1, "resize")
	mapC1.setCenter(centerC1)

	var centerC2 = mapC2.getCenter()
	google.maps.event.trigger(mapC2, "resize")
	mapC2.setCenter(centerC2)
})

myOptions = {
	center: new google.maps.LatLng(-36.62, -64.29), 
	streetViewControl: false,
	zoom: 4,
	mapTypeId: google.maps.MapTypeId.ROADMAP
};

map = new google.maps.Map(document.getElementById("map"), myOptions);