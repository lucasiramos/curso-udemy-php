/*var map = new ol.Map({
	target: 'map',
	layers: [
	 	new ol.layer.Tile({
			source: new ol.source.OSM()
		})
	],
	view: new ol.View({
		center: ol.proj.fromLonLat([-64.29, -36.62]),
		zoom: 6
	})
});*/
var map = new OpenLayers.Map({
    div: "map",
    layers: [
        new OpenLayers.Layer.WMS(
            "WMS", "http://vmap0.tiles.osgeo.org/wms/vmap0",
            {layers: "basic"}
        ),
        new OpenLayers.Layer.Vector("KML", {
            strategies: [new OpenLayers.Strategy.Fixed()],
            protocol: new OpenLayers.Protocol.HTTP({
                url: "kml/lines.kml",
                format: new OpenLayers.Format.KML({
                    extractStyles: true, 
                    extractAttributes: true,
                    maxDepth: 2
                })
            })
        })
    ],
    center: new OpenLayers.LonLat(-112.169, 36.099),
    zoom: 11
});

console.log("123456")

/*
// Maps no funca

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

map = new google.maps.Map(document.getElementById("map"), myOptions); */