@extends("layout.app")

@section("Contenido")

<h3>Recuperar contraseña</h3>
<form method="POST" action="{{route('user.password.email')}}">
@csrf
    <label>Email:</label>
    <input type="email" name="email" required class="form-control mb-2">
    <button type="submit" class="btn btn-primary">Enviar enlace</button>
</form>
@endsection