@extends('layouts.lading')
@section('content')
    <div class="container mt-5">
  <h2 class="mb-4">Centro Votacion</h2>
  <form>
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
    </div>
    <div class="mb-3">
      <label for="apellido" class="form-label">Ubicacion</label>
      <input type="text" class="form-control" id="ubicacion" placeholder="Ingrese su ubicacion">
    </div>
    <div class="mb-3">
      <label for="telefono" class="form-label">Responsable</label>
      <input type="tel" class="form-control" id="responsable" placeholder="Ingrese el responsable">
    </div>
    <div class="mb-3">
      <label for="direccion" class="form-label">Zona</label>
      <input type="text" class="form-control" id="zona" placeholder="Ingrese la zona">
    </div>
    <div class="mb-3">
      <label for="correo" class="form-label">Imagen</label>
      <input type="email" class="form-control" id="image" placeholder="Ingrese la imagen">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
@endsection