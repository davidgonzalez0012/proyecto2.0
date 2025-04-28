@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Bienvenido, {{ Auth::guard('worker')->user()->name }}</h2>
    <form method="POST" action="{{ route('worker.logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
    </form>
</div>

<h3 class="mb-3">Ofertas de Empleo Disponibles:</h3>

<div class="row">
    @foreach($Offer as $Offer)
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $Offer->title }}</h5>
                <p class="card-text">{{ Str::limit($Offer->description, 100) }}</p>
                <a href="#" class="btn btn-primary">Ver Más</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection