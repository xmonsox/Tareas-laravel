@extends('layouts.lading')
@section('content')
<h1>Listado</h1>
<ul>
	@forelse($users as $user)
		<li>{{$user->name}}</li>
	@empty
		<li>Lista vacia</li>
	@endforelse
</ul>
@endsection