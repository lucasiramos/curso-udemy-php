@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Página inicial</div>

                <div class="card-body">
                    @guest
                        <h1>Bienvenido</h1>

                        <p>Si tiene un usuario, por favor <a href="/login">inicie sesión para empezar</a>. Si no tiene un usuario, <a href="/register">realice el registro</a>.</p>
                        <hr>
                        <h5><a href="{{ route('productos') }}">Mire nuestros productos</a></h5>
                    @else
                        <h1>Bienvenido {{ Auth::user()->nombre . ' ' . Auth::user()->apellido }}</h1>

                        <ul>
                            <li><a href="{{ route('ventas') }}">Ventas</a></li>
                            <li><a href="{{ route('productos') }}">Listado de productos</a></li>
                        </ul>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
