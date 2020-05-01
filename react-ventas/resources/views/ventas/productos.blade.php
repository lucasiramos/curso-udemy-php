@extends('layouts.ventas')

@section('content')
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark">Productos disponibles: {{ $cantProductos }}</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="{{ route('ventas.index') }}">Inicio</a></li>
							<li class="breadcrumb-item active">Productos</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					@foreach($productos as $producto)
						<div class="col-md-4 mb-4">
							<div class="card card-primary card-outline p-2 h-100 card-hover" data-id="{{ $producto->id }}">
								<div class="unProducto">
									<div class="imagenProducto">
										<img src="{{ asset('img/productos/' . $producto->imagen) }}" class="img-responsive">
									</div>
									<div class="textoProducto">
										<h4 class="nombreProducto">
											{{ $producto->nombre }}
										</h4>
										<div class="precioProducto">
											<h5 class="font-weight-bold float-right mb-0">
												${{ number_format($producto->precio, 2, ',', '.') }}
											</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				{{ $productos->links() }}
			</div>
		</div>
		<!-- /.content -->
	</div>

	<!-- Modal -->
	<div class="modal fade" id="masInfoProducto" tabindex="-1" role="dialog" aria-labelledby="masInfoProducto" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div id="contenidoMasInfoProducto">
						<p>&nbsp;</p>
						<div id="imagenesProducto" class="carousel slide" data-ride="carousel">
							<ul class="carousel-indicators" id="indicadoresCarrusel">
							</ul>
							<div class="carousel-inner">
							</div>
							<a class="carousel-control-prev" href="#imagenesProducto" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#imagenesProducto" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
						<div id="textosMasInfoProducto">
						</div>
					</div>
					<div id="CargandoInicial" class='divCargando'><div class="spinner"></div><div class='txtCargando'>Cargando...</div></div>
					<button type="button" class="btn btn-primary float-right" data-dismiss="modal">Cerrar</button>
	  			</div>
			</div>
		</div>
	</div>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/productos.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/cards.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/spinner.css') }}">
@endsection

@section('funciones')
<script type="text/javascript" src="{{ asset('js/cards.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/webconfig.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/productos.js') }}"></script>
@endsection