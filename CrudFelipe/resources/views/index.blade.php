<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Index</title>
	<link rel="stylesheet" href="">
</head>
<body>
	{{-- <a href="{{route('create')}}"></a> --}}
	@if($message = Session::get('success'))
		<div style="padding: 15px; background-color: green; color: white;">
			<p>{{$message}}</p>
		</div>
	@endif
	@if($message = Session::get('danger'))
		<div style="padding: 15px; background-color: red; color: white;">
			<p>{{$message}}</p>
		</div>
	@endif
	<h2>listado</h2>
	<ul>
		@forelse($notes as $note)
		<li>
			<a href="{{route('show', $note->id)}}">{{$note->title}}</a>
			<a href="{{route('edit', $note->id)}}">Editar</a>

			<form method="POST" action="{{route('destroy', $note->id)}}">
				@csrf
				@method('DELETE')
				<input type="submit" value="DELETE">
			</form>
		</li>
		@empty
			<li>Lista Vacia</li>
		@endforelse
	</ul>
</body>
</html>