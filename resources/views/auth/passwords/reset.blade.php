@extends('layout.app')

@section('content')
<h2>Restablecer Contraseña</h2>

<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">
    <input type="hidden" name="email" value="{{ $email }}">

    <div class="mb-3">
        <label for="password">Nueva Contraseña</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="password_confirmation">Confirmar Contraseña</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>

    <button class="btn btn-success">Restablecer</button>
</form>
@endsection