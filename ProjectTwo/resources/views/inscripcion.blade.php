@extends('layouts.lading')
@section('content')
    <div class="container mt-5">
  <h2 class="mb-4">Formulario de Registro</h2>
  <form>
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
    </div>
    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
    </div>
    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono</label>
      <input type="tel" class="form-control" id="telefono" placeholder="Ingrese su teléfono">
    </div>
    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección</label>
      <input type="text" class="form-control" id="direccion" placeholder="Ingrese su dirección">
    </div>
    <div class="mb-3">
      <label for="correo" class="form-label">Correo Electrónico</label>
      <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo electrónico">
    </div>
    <div class="mb-3">
      <label for="correo" class="form-label">Lider</label>
      <input type="email" class="form-control" id="lider" placeholder="Ingrese el lider">
    </div>
    <div class="mb-3">
      <label for="zona" class="form-label">Zona</label>
      <select class="form-select" id="zona">
        <option selected disabled>Seleccione una zona</option>
        <option value="Cuba">Cuba</option>
        <option value="Cartago">Cartago</option>
        <option value="Providencia">Providencia</option>
        <option value="Centro">Centro</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="centro-votacion" class="form-label">Centro de Votación</label>
      <select class="form-select" id="centro-votacion">
        <option selected disabled>Seleccione un centro de votación</option>
        <option value="Sor Maria">Sor María</option>
        <option value="Juan 23">Juan 23</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="puesto-votacion" class="form-label">Puesto de Votación</label>
      <select class="form-select" id="puesto-votacion">
        <option selected disabled>Seleccione un puesto de votación</option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
      </select>
    </div>
    <div class="mb-4 text-center  ">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>
</div>
@endsection