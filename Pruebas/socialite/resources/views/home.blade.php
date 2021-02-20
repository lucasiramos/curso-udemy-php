@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Home</h3>

                    <a href="{{ route('primero') }}" class="btn btn-primary my-3">Primero</a>
                    <a href="{{ route('segundo') }}" class="btn btn-primary my-3">Segundo</a>
                    <a href="{{ route('tercero') }}" class="btn btn-primary my-3">Tercero</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
