@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Eliminación de información</div>

				<div class="card-body">
					<h3>Información de privacidad</h3>

					<p style="font-size: 16px;">{{ $mensaje }}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
