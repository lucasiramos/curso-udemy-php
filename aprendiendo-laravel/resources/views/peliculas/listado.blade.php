@include('includes.header')

<!-- <h1><?=$titulo?></h1>
<h2><?=$listado[2]?></h2>-->

{{-- Sintaxis Blade (Esto es un comentario) --}}

<h1>{{$titulo}}</h1>
<h2>{{$listado[2]}}</h2>
<p>{{ date('Y') }}</p>

<hr>
<p>Condición ternaria:</p>

<!-- <?php
	$director = "Enrique Segoviano";
?> -->

{{ $director ?? 'No hay ningún director' }}
<hr>
<!-- CONDICIONALES -->
@if($titulo && count($listado) >= 5)
	El título existe y es: {{$titulo}} y el listado es mayor o igual a 5.
@elseif($titulo)
	El título existe y es: {{$titulo}} y el listado es menor a 5
@else
	El título no existe
@endif
<br><br>

<!-- BUCLES -->
@for($i = 1; $i <= 5; $i++)
	El número es {{$i}} <br>
@endfor

<?php $contador = 1; ?>
<br><br>
@while($contador < 20)
	@if($contador % 2 == 0)
		NUMERO PAR: {{$contador}} <br>
	@endif

	<?php $contador ++; ?>
@endwhile

<br><br>
@foreach($listado as $pelicula)
	<p>{{$pelicula}}</p>
@endforeach

@include('includes.footer')