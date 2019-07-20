@extends('layouts.app')

@section('content')
<link href="{{ asset('css/ventas.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('mensaje'))
                <div class="alert alert-success">
                    {{ session('mensaje') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Mis ventas</div>

                <div class="card-body">
                    <h2>Cantidad total de ventas: {{ $facturas->count() }}</h2>

                    @if($facturas->count() > 0)
                    	<table id="tblVentas">
                    		<th>Fecha</th>
                    		<th>Cliente</th>
                    		<th>Total</th>
		                    @foreach ($facturas as $Factura)
		                    	<tr>
		                    		<td>{{ $Factura->Fecha }}</td>
		                    		<td>{{ $Factura->Cliente->Nombre . ' ' . $Factura->Cliente->Apellido }}</td>
		                    		<td>${{ $Factura->Total }}</td>
		                    	</tr>
		                    @endforeach
	                    </table>
	                @else
	                	<div>Esmérese mequetrefe...</div>
	                @endif
	                <br>
	                <a href="{{ route('ventas.nueva') }}" role="button" class="btn btn-primary">Realizar nueva venta</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection