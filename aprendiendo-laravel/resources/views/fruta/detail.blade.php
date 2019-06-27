<h1>Una fruta</h1>

<h2>{{$fruta->nombre}}</h2>
<p>{{$fruta->descripcion}}</p>

<a href="{{ action('FrutaController@delete', ['id' => $fruta->id]) }}">Eliminar</a>
<a href="{{ action('FrutaController@edit', ['id' => $fruta->id]) }}">Editar</a>
