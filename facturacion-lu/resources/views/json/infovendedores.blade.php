@extends('layouts.app')

@section('content')
<link href="{{ asset('css/ventas.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('js/infovendedores.js?v=1') }}"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Info de vendedores</div>

                <div class="card-body">
                    @foreach($vendedores as $vendedor)
                    	<div>
                    		<a href="#" class="lnkInfo" data-id="{{ $vendedor->id }}">{{ $vendedor->nombre }} {{ $vendedor->apellido }}</a>
                    	</div>
                    @endforeach
                    <div style="margin-top: 20px;" id="MasDatos"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection