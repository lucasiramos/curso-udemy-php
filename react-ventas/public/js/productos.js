var resultados

$(function(){
	$(".card-hover").click(function(){
		$("#masInfoProducto #contenidoMasInfoProducto").hide()
		$("#masInfoProducto #CargandoInicial").show()

		$('#masInfoProducto').modal()

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$.ajax({
			type: 'POST',
			url: SERVER + 'ventas/productos/ajaxDetalleProducto',
			data: {idProducto:$(this).data("id")},
			success:function(data){
				CargarContenidoModal(data);
			}
		});
	})
});

function CargarContenidoModal(response){
	resultados = response.data

	htmlModal = "<h4>" + resultados.nombre + "</h4>"
	htmlModal = htmlModal + "<p>" + resultados.descripcion + "</p>"

	htmlIndicadores = ""
	htmlImagenes = ""

	for(i=0; i<resultados.imagenes.length; i++){
		if(i == 0){
			htmlIndicadores = '<li data-target="#demo" data-slide-to="0" class="active"></li>'
			htmlImagenes = '<div class="carousel-item active"><img class="img-responsive" src="' + SERVER + 'img/productos/' + resultados.imagenes[i] + '"></div>'
		}else{
			htmlIndicadores = htmlIndicadores + '<li data-target="#demo" data-slide-to="' + i + '"></li>'
			htmlImagenes = htmlImagenes + '<div class="carousel-item"><img class="img-responsive" src="' + SERVER + 'img/productos/' + resultados.imagenes[i] + '"></div>'
		}
	}

	$("#masInfoProducto #contenidoMasInfoProducto #indicadoresCarrusel").html(htmlIndicadores)
	$("#masInfoProducto #contenidoMasInfoProducto .carousel-inner").html(htmlImagenes)
	$("#masInfoProducto #contenidoMasInfoProducto #textosMasInfoProducto").html(htmlModal)
	$("#masInfoProducto #contenidoMasInfoProducto").show()
	$("#masInfoProducto #CargandoInicial").hide()
}