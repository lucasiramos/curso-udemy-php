@extends('layouts.app')

@section('content')
<link href="{{ asset('css/nueva-venta.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva venta</div>

                <div class="card-body">
                	<form method="POST" action='{{ route('ventas.grabaencabezado') }}'>
                		{{ csrf_field() }}

	                    <b>Seleccione el cliente:</b><br>
	                   	<select name="cliente">
	                   		@foreach($clientes as $Cliente)
	                   			<option value='{{$Cliente->Id}}'>{{$Cliente->Nombre}} {{$Cliente->Apellido}}</option>
	                   		@endforeach
	                   	</select>
	                   	<br><br>
	                    <input type="submit" value="Crear factura" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
