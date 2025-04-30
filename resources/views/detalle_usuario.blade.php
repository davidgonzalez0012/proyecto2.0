@extends('layout.app_admin')

@section('content')
<div class="container">
    <h1>Detalle del Usuario</h1>

    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>TIPO Usuario:</strong> {{ $user->tipo_usuario }}</p>
    <p><strong>Nombre:</strong> {{ $user->nombre }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <a href="{{ route('gestion_users') }}" class="btn btn-primary">Volver a la gestión de usuarios</a>
</div>
@endsection