url = "http://facturacion.com.devel:8080";

console.log("123123123")

window.addEventListener("load", function(){
	$(document).on('click', '.lnkInfo', function(event){
		//MasDatos
		event.preventDefault();

		$.ajax({
			url: url + '/json/' + $(this).data('id'),
			type: 'GET',
			success: function(response){
				console.log(response)
				/*htmlDatos = "<h3>Información del vendedor</h3>"
				htmlDatos = htmlDatos + "<h5 style='display: inline-block'>Nombre: </h5>" + response.nombre
				htmlDatos = htmlDatos + "<br/><h5 style='display: inline-block'>Apellido: </h5>" + response.apellido
				htmlDatos = htmlDatos + "<br/><h5 style='display: inline-block'>Pelo: </h5>" + response.datos.pelo
				htmlDatos = htmlDatos + "<br/><h5 style='display: inline-block'>Altura: </h5>" + response.datos.altura
				htmlDatos = htmlDatos + "<br/><h5 style='display: inline-block'>Edad: </h5>" + response.datos.edad

				$("#MasDatos").html(htmlDatos)*/
				console.log("///////////////////////////////////////")

				console.log(response.length)	
				console.log(response[0])
				console.log(response[0].nombre)
				console.log(response[0].apellido)
				console.log(response[1])

				console.log("---------------------------------------")

				response.forEach(Procesar)

				function Procesar(pItem, pIndice){
					console.log(pItem.nombre)
					console.log(pItem.apellido)
					console.log(pItem.datos.edad)
					console.log(pItem.datos.altura)
					console.log(pItem.datos.pelo)
					console.log("********")
				}
			}
		})
	});
});