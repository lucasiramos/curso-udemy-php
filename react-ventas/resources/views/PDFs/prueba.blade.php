<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
	  @font-face {
      font-family: 'Candara';
      src: url({{ storage_path('fonts/Candara.ttf') }});
    }

    @font-face {
      font-family: 'Candarab';
      src: url({{ storage_path('fonts/Candarab.ttf') }});
    }

    p{
    	margin: 0px;
    	line-height: 1;
    }

    .CandaraBold{
      font-family: 'Candarab';
    }

    .CandaraItalic{
      font-style: italic;
    }

    body{
    	font-family: "Candara";
    }

    .titulo{
    	font-size: 35px;
    	color: #0F70A3;
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
  <p class="CandaraItalic">Texto italica</p>
  <p class="CandaraBold">Texto negrita</p>
  <p>Texto Semilight</p>
  <p>Texto Light</p>
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
  <br>
  <p>Clientes:</p>
  <table>
    <thead>
      <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Dirección</td>
        <td>Compañía</td>
      </tr>
    </thead>
    <tbody>
      @foreach($clientes as $cliente)
        <tr>
          <td>{{ $cliente['id'] }}</td>
          <td>{{ $cliente['nombre'] }}</td>
          <td>{{ $cliente['direccion'] }}</td>
          <td>{{ $cliente['compania'] }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>