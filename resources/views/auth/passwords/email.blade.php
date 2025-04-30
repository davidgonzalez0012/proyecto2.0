@extends('layout.app')

@section('content')
<h2>Recuperar Contraseña</h2>

@if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="mb-3">
        <label for="email">Correo</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <button class="btn btn-primary">Enviar enlace</button>
</form>
@endsection