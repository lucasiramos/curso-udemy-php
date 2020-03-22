@extends('plantilla.principal')

@section('referencias-header')
	<!-- MAPS NO FUNCA -->
	<!-- <script src="{{ asset('js/Maps/jquery-1.7.1.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_hcpGGUVchBe0X87hlpzZz6pBC6uWk2U"></script>
	<script src="{{ asset('js/Maps/geoxmlv3.js') }}"></script>
	<script src="{{ asset('js/Maps/ProjectedOverlay.js') }}"></script>
	<script src="{{ asset('js/Maps/modernizr.min.js') }}"></script>	
	<script src="{{ asset('js/Maps/fx_maps.js') }}"></script> -->

	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.2.1/css/ol.css" type="text/css"> -->
	<!-- <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.2.1/build/ol.js"></script> -->
	<!-- <script src="{{ asset('js/OpenLayers/OpenLayers.js') }}"></script> -->

	<!-- <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
	<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script> -->

	<style>
		#map {
			height: 480px;
			width: 640px;
		}
	</style>
@endsection

@section('cuerpo')
	<div class="col-md-12">
		<h1>Maps</h1>
		<hr class="botm-line">
	</div>
	<div class="col-md-12">
		<h3>Aca va el Mapita</h3>
		<div id='map' style='width: 400px; height: 300px;'></div>
		<script>
			var map;
			var src = 'http://www.grupodemusicaliturgica.org.ar/pruebamaps/public/maps/parse';

			function initMap() {
				map = new google.maps.Map(document.getElementById('map'), {
					center: new google.maps.LatLng(-36.62, -64.29),
					zoom: 5,
					mapTypeId: 'terrain'
				});

				/*var kmlLayer = new google.maps.KmlLayer(src, {
					suppressInfoWindows: false,
					preserveViewport: false,
					map: map
				});
				kmlLayer.addListener('click', function(event) {
					var content = event.featureData.infoWindowHtml;
					var testimonial = document.getElementById('capture');
					console.log(content);
				});*/
				var georssLayer = new google.maps.KmlLayer({
					url: 'http://localhost:4741/curso-udemy-php/estilos-auth-maps/public/maps/parse'
				});
				georssLayer.setMap(map);
			}
		</script>
		<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZYlhVQBcAktdikYGOapTcMSXbQ1tf6lo&callback=initMap">
		</script>
	</div>
@endsection