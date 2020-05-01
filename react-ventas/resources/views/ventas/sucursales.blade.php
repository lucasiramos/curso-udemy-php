@extends('layouts.ventas')

@section('content')
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark">Listado de sucursales</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="{{ route('ventas.index') }}">Inicio</a></li>
							<li class="breadcrumb-item active">Sucursales</li>
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
					<div class="col-sm-3"></div>
					<div class="col-lg-6">
						<div class="card card-primary card-outline">
							<div class="card-body">
								<h4>Sucursales activas</h4>

								<div class="card-body table-responsive p-0">
									<table class="table table-striped table-valign-middle">
										<thead>
											<tr>
												<th>Id</th>
												<th>Ciudad</th>
												<th>Latitud</th>
												<th>Longitud</th>
											</tr>
										</thead>
										<tbody>
											@foreach($sucursales as $sucursal)
												<tr>
													<td>{{ $sucursal->id }}</td>
													<td>{{ $sucursal->nombre }}</td>
													<td>{{ $sucursal->latitud }}</td>
													<td>{{ $sucursal->longitud }}</td>
												</tr>
											@endforeach
										</tbody>
									</table>
									<div class="mt-2">
										{{ $sucursales->links() }}
									</div>
								</div>
							</div>
						</div><!-- /.card -->
					</div>
					<div class="col-sm-3"></div>
				</div>
			</div>
		</div>
		<!-- /.content -->
	</div>
@endsection