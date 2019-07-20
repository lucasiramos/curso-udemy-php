@extends('layouts.app')

@section('content')
<link href="{{ asset('css/productos.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('mensaje-nuevoproducto-ok'))
                <div class="alert alert-success">
                    {{ session('mensaje-nuevoproducto-ok') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Listado de productos disponibles (del más caro al más barato)</div>

                <div class="card-body">
                    @foreach($productos as $Producto)
                        <div>
                            <img class="producto-listado" src="{{ route('productos.imagen',['archivo' => $Producto->Imagen]) }}">
                            <h4>{{ $Producto->Nombre }} (${{ $Producto->Precio }})
                            </h4>
                            <h6>
                                {{ $Producto->Descripcion }}
                            </h6>
                            <br>
                        </div>
                    @endforeach
                </div>
                {{ $productos->links() }}
            </div>
        </div>
    </div>
</div>
@endsection