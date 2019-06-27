$(function(){
	alert("Iniciando sesión 3")

    $("#loginform").submit(function(e){
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "login.php",
            data: $(this).serialize(),
            success: function(response){
                console.log(response)
                console.log(response.d)

                var jsonData = JSON.parse(response)

                if(jsonData.success == 1){
                    //location.href = "Página de inicio"
                    alert("Login correcto")
                }else{
                    alert("Login incorrecto, error.")
                }
            }
        })
    });

    /*
    $.ajax({
        url: "datos.php",
        type: "post",
        dataType: "json",
        success: MuestroDatos,
        failure: function (response) {
            alert("Error: " + response.d);
        }
    });*/
});

/*function MuestroDatos(response) {
    //Cargo los videos
    alert("Datos: " + response.d);
}*/