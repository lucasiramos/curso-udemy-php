@extends('plantilla.principal')

@section('cuerpo')
	<div class="col-md-12">
		<h1>Página principal</h1>
		<hr class="botm-line">
	</div>
	<div class="col-md-6">
		<h3>¡Bienvenido!</h3>
		<p>Por favor inicie sesión en el siguiente recuadro para comenzar</p>

		<form method="POST" action="{{ route('login') }}">
			@csrf

			<label for="email">Email</label>
			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
			@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror

			<br>

			<label for="password">Contraseña</label>
			<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
			@error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror

			<br>

			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

				<label class="form-check-label" for="remember">
					Recordar mis datos
				</label>
			</div>

			<br>

			<button type="submit" class="btn btn-primary">
				Iniciar sesión
			</button>

			@if (Route::has('password.request'))
				<a class="btn btn-link" href="{{ route('password.request') }}">
					{{ __('Forgot Your Password?') }}
				</a>
			@endif
		</form>
	</div>
@endsection