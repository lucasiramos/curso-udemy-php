<h1>Listado de frutas</h1>
<a href="{{ action('FrutaController@create') }}">Crear fruta</a>

@if(session('status'))
	<p style="background: green; color: white;">{{ session('status') }}</p>
@endif

<ul>
	@foreach($frutas as $fruta)
		<li>
			<!-- <a href="detail/{{$fruta->id}}"> -->
			<a href="{{ action('FrutaController@detail', ['id' => $fruta->id]) }}">
				{{$fruta->nombre}}
			</a>
		</li>
	@endforeach
</ul>