@extends('layouts.landing')
@section('content')
    <div class="mt-4 text-warning text-center">
        <h1>Registro Empresa</h1>
    </div>

    <div class="center">
        <form>
            <div class="mb-3">
                <label for="companyName" class="form-label">Nombre de la empresa</label>
                <input type="text" class="form-control" id="companyName" placeholder="Nombre de la empresa">
            </div>
            <div class="mb-3">
                <label for="marketType" class="form-label">Tipo de mercado</label>
                <select class="form-select" id="marketType">
                    <option selected>Seleccionar...</option>
                    <option value="1">Opción 1</option>
                    <option value="2">Opción 2</option>
                    <option value="3">Opción 3</option>
                    <option value="4">Opción 4</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Correo electrónico">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="Contraseña">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-secondary">Volver</button>
                <button type="submit" class="btn btn-warning">Enviar</button>
            </div>

        </form>
    </div>
@endsection
