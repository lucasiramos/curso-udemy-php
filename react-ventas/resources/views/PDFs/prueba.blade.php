<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
	@font-face {
    	font-family: 'Segoe UI';
        src: url({{ storage_path('fonts/segoeui.ttf') }});
    }
    @font-face {
    	font-family: 'Segoe UI Bold';
        src: url({{ storage_path('fonts/segoeuib.ttf') }});
    }
    @font-face {
    	font-family: 'Segoe UI Italic';
        src: url({{ storage_path('fonts/segoeuii.ttf') }});
    }
    @font-face {
    	font-family: 'Segoe UI Semilight';
        src: url({{ storage_path('fonts/segoeuisl.ttf') }});
    }
    @font-face {
    	font-family: 'Segoe UI Light';
        src: url({{ storage_path('fonts/segoeuil.ttf') }});
    }

    p{
    	margin: 0px;
    	line-height: 1;
    }

    body{
    	font-family: "Segoe UI";
    }

    .titulo{
    	font-size: 35px;
    	color: #0F70A3;
    	font-family: "Segoe UI Bold";
    }

    .SegoeItalic{
    	font-family: "Segoe UI italic";
    	font-size: 25px;
    }

    .SegoeSemilight{
    	font-family: "Segoe UI Semilight";
    	font-size: 25px;
    }

	.Segoe{
		font-family: "Segoe UI";
		font-size: 25px;
	}

	.SegoeLight{
		font-family: "Segoe UI Light";
		font-size: 25px;
	}

	.divino{
		border: 1px solid black;
		padding: 20px;
	}

	table {
	    width:100%;
	    max-width:100%;
	    border-collapse: collapse;
	}

	table .lateral{
		background-color: #C1C1C1;
		font-family: "Segoe UI Bold";
		width:100px;
		vertical-align: top;
	}

	table .centro{
		background-color: green;
		color: white;
		vertical-align: top;
	}

	table td{
		border: 1px solid black;
		padding: 5px;
		line-height: 1;
	}

	a.linkcito:link{ color: #1978B0; text-decoration: none;}

</style>
<head>
 <title>{{ $title }}</title>
</head>
<body>
  <p class="titulo">{{ $heading }}</p>
  <p>{{$content}}</p>
  <p>Candara</p>
  <p class="SegoeItalic">Texto Italica</p>
  <p class="Segoe">Texto común</p>
  <p class="SegoeSemilight">Texto Semilight</p>
  <p class="SegoeLight">Texto Light</p>
  <div class="divino">Soy un div</div>
  <table>
  	<tr>
  		<td class="lateral">Textito</td>
  		<td class="centro">Este sería el cuerpo del texto</td>
  	</tr>
  	<tr>
  		<td class="lateral">Otro texto que estoy poniendo en este lugar</td>
  		<td class="centro">Este sería el cuerpo del texto pero de la segunda fila</td>
  	</tr>
  </table>
  <a class="linkcito" href="http://rian.inta.gob.ar">A ver si vamos a RIAN</a>
</body>