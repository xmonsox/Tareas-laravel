@extends('layouts.lading')
@section('content')
    <div class="container mt-5">
  <h2 class="mb-4">Zones</h2>
  	<form>
	    <div class="mb-3">
	      	<label for="nombre" class="form-label">Nombre </label>
	      	<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
	    </div>
	    <div class="mb-3">
	      	<label for="nombre" class="form-label">Barrio </label>
	      	<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
	    </div>

	    <div class="mt-3 text-center">
	    	<button type="submit" class="btn btn-primary">Enviar</button>
	    </div>
  	</form>
</div>
@endsection