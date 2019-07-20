@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¡Gracias por registrarse!</div>

                <div class="card-body">
                    <h1>Bienvenido al sistema {{ $user->nombre . ' ' . $user->apellido }}!</h1>
					<p>Holis</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


