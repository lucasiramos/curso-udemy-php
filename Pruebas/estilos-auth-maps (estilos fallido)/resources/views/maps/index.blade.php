@extends('layouts.app')

@section('referencias-header')
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
    <script type="text/javascript" src="{{ asset('js/Leaflet/L.KML.js') }}"></script>
@endsection

@section('cuerpo')
	<div class="col-md-12">
		<h2 class="ser-title">Google Maps</h2>
		<hr class="botm-line">
	</div>
	<div class="col-md-12">
		<h3>Maps 2</h3>
		<div id="map" style="width: 600px; height: 400px;"></div>
	</div>
	<script type="text/javascript">
		// Esto funca!
		var mymap = L.map('map').setView([-36.62, -64.29], 13);

		L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11',
			tileSize: 512,
			zoomOffset: -1
		}).addTo(mymap);

		//Marcador
		var marker = L.marker([-36.62, -64.3]).addTo(mymap);

		//Popup
		//marker.bindPopup("<b>Hello world!</b><br>I am a popup."); //.openPopup();

		// var popup = L.popup()
		//     .setLatLng([-36.6, -64.28])
		//     .setContent("I am a standalone popup.")
		//     .openOn(mymap)

		//KML
		const osm = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
		mymap.addLayer(osm);

		//fetch('kmls/42.kml')
		fetch('http://localhost:4741/curso-udemy-php/Pruebas/estilos-auth-maps/public/maps/parse')
            .then(res => res.text())
            .then(kmltext => {
                // Create new kml overlay
                const parser = new DOMParser();
                const kml = parser.parseFromString(kmltext, 'text/xml');
                const track = new L.KML(kml);

                mymap.addLayer(track);

                // Adjust map to show the kml
                const bounds = track.getBounds();
                mymap.fitBounds(bounds);
            });
	</script>
@endsection