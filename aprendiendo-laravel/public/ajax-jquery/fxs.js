$(function(){
    $("#loginform").submit(function(e){
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "login.php",
            data: $(this).serialize(),
            success: function(response){
                var jsonData = JSON.parse(response)

                htmlResultados = "<h2>Datos desde PHP</h2>"
                htmlResultados = htmlResultados + "<p>" + jsonData.Nombre + "</p>"
                htmlResultados = htmlResultados + "<p>" + jsonData.Apellido + "</p>"
                htmlResultados = htmlResultados + "<p>" + jsonData.Datos.Edad + "</p>"
                htmlResultados = htmlResultados + "<p>" + jsonData.Datos.Peso + "</p>"
                htmlResultados = htmlResultados + "<p>" + jsonData.Datos.Estudios.Escuela + "</p>"
                htmlResultados = htmlResultados + "<p>" + jsonData.Datos.Estudios.Analista + "</p>"
                htmlResultados = htmlResultados + "<p>" + jsonData.Datos.Estudios.Lic + "</p>"

                $("#DatosResultantes").html(htmlResultados)
            }
        })
    });
});