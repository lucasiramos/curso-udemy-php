@extends('layouts.app')

@section('content')
<link href="{{ asset('css/nueva-venta.css') }}" rel="stylesheet">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			@if(session('mensaje'))
				<div class="alert alert-success">
					{{ session('mensaje') }}
				</div>
			@endif
			<div class="card">
				<div class="card-header">Agregar items</div>

				<div class="card-body">
					<form method="POST" action='{{ route('ventas.grabaitem') }}'>
						{{ csrf_field() }}

						<div class="form-group row">
							<label for="producto" class="col-md-4 col-form-label text-md-right">Seleccione el producto:</label>

							<div class="col-md-6">
								<select name="producto">
									@foreach($productos as $Producto)
										<option value='{{$Producto->Id}}'>{{$Producto->Nombre}} (${{$Producto->Precio}})</option>
									@endforeach
								</select>        
							</div>
						</div>
						<div class="form-group row">
							<label for="cantidad" class="col-md-4 col-form-label text-md-right">Ingrese la cantidad:</label>

							<div class="col-md-6">
								<input id="cantidad" type="number" class="form-control{{ $errors->has('cantidad') ? ' is-invalid' : '' }}" name="cantidad" value="{{ old('cantidad') }}" required autofocus>

								@if ($errors->has('cantidad'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('cantidad') }}</strong>
									</span>
								@endif      
							</div>
						</div>
						<div class="form-group row">
							<label for="cantidad" class="col-md-4 col-form-label text-md-right"></label>

							<div class="col-md-6">
								<input type="submit" value="Agregar item" class="btn btn-primary">
							</div>
						</div>
						<input type="hidden" name='idfactura' value='{{ $idfactura }}'>
					</form>
					@if($items->count() > 0)
					   <table id="tblFactura">
							<th>Producto</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Subtotal</th>
							<?php 
								$total_factura = 0;
							?>
							@foreach ($items as $Item)
								<tr>
									<td>{{ $Item->Producto->Nombre }}</td>
									<td>{{ $Item->Producto->Precio }}</td>
									<td>{{ $Item->Cantidad }}</td>
									<td>{{ $Item->Total }}</td>
								</tr>

								<?php 
									$total_factura = $total_factura + $Item->Total;
								?>
							@endforeach
						</table>
						<b>Total: {{ $total_factura }}</b>
						<form method="POST" action="{{ route('ventas.cerrarfactura') }}">
							@csrf

							<input type="hidden" name='total' value="{{ $total_factura }}">
							<input type="hidden" name='idfactura' value='{{ $idfactura }}'>
							<input type="submit" value="Cerrar factura" class="btn btn-primary" >
						</form>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
