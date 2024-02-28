@extends('layouts.lading')
@section('content')
    <div class="container mt-5">
  <h2 class="mb-4">Lider</h2>
  	<form>
	  	<div class="mb-3">
	      	<label for="nombre" class="form-label">Documento</label>
	      	<input type="text" class="form-control" name="documento" id="documento" placeholder="Ingrese su documento">
	    </div>
	    <div class="mb-3">
	      	<label for="nombre" class="form-label">Nombre</label>
	      	<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
	    </div>
	    <div class="mb-3">
	      	<label for="apellido" class="form-label">Apellido</label>
	      	<input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese su apellido">
	    </div>
	    <div class="mb-3">
	      	<label for="direccion" class="form-label">Correo Electronico</label>
	      	<input type="text" class="form-control" name="correo" id="zona" placeholder="Ingrese la zona">
	    </div>
	    <div class="mb-3">
	      	<label for="centro-votacion" class="form-label">Lider Comunal</label>
	      	<select class="form-select" id="centro-votacion" name="lider">
	        	<option selected disabled>Seleccione..</option>
	        	<option value="Sor Maria">Si</option>
	        	<option value="Juan 23">No</option>
	      	</select>
	    </div>
	    <div class="mt-3 text-center">
	    	<button type="submit" class="btn btn-primary">Enviar</button>
	    </div>
  	</form>
</div>
@endsection