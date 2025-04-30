@extends('layout.app')

@section('content')
<h3>Restablecer Contraseña</h3>
<form method="POST" action="{{ route('user.password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <input type="hidden" name="email" value="{{ $email }}">

    <label>Nueva contraseña:</label>
    <input type="password" name="password" required class="form-control mb-2">

    <label>Confirmar contraseña:</label>
    <input type="password" name="password_confirmation" required class="form-control mb-2">

    <button type="submit" class="btn btn-success">Restablecer</button>
</form>
@endsection