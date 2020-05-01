<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Font Awesome Icons -->
	<link href="{{ asset('css/adminlte/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('css/adminlte/adminlte.css') }}">
	<!-- Estilos generales -->
	<link rel="stylesheet" href="{{ asset('css/generales.css') }}">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

	<!-- Barra de navegación TOP -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="#" class="nav-link">E-mail</a>
			</li>
		</ul>

		<!-- Formulario de búsqueda -->
		<form class="form-inline ml-3">
			<div class="input-group input-group-sm">
				<input class="form-control form-control-navbar" type="search" placeholder="Ingresar búsqueda" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-navbar" type="submit">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>

		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					Cerrar sesión
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</li>
		</ul>
	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="{{ route('ventas.index') }}" class="brand-link">
			<img src="{{ asset('img/logo.png') }}" alt="Sports Shop" class="brand-image img-circle elevation-3"
					 style="opacity: .8">
			<span class="brand-text font-weight-light">Sports Shop</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<img src="{{ asset('img/adminltemp/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
				</div>
				<div class="info">
					<a href="#" class="d-block">{{ $nombreUsuario }}</a>
				</div>
			</div>

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<li class="nav-item">
						<a href="{{ route('ventas.index') }}" class="nav-link">
							<i class="fas fa-flag-checkered nav-icon"></i>
							<p>
								Inicio
							</p>
						</a>
					</li>
					<li class="nav-item has-treeview menu-open">
						<a href="#" class="nav-link active">
							<i class="nav-icon fas fa-list-ul"></i>
							<p>
								Listados
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="fas fa-dollar-sign nav-icon"></i>
									<p>Mis ventas</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('ventas.productos.listar') }}" class="nav-link">
									<i class="far fa-futbol nav-icon"></i>
									<p>Productos</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('ventas.sucursales.listar') }}" class="nav-link">
									<i class="fas fa-store nav-icon"></i>
									<p>Sucursales</p>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>

	<!-- CUERPO DE LA PAGINA -->
	@yield('content')

	<!-- Main Footer -->
	<footer class="main-footer">
		<!-- To the right -->
		<div class="float-right d-none d-sm-inline">
			Anything you want vendedor
		</div>
		<!-- Default to the left -->
		<strong>Copyright &copy; 2014-{{ date('Y') }} <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
	</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('js/plugins/jquery.3.4.1.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/plugins/adminlte.min.js') }}"></script>
<!-- Funciones mías -->
@yield('funciones')
</body>
</html>