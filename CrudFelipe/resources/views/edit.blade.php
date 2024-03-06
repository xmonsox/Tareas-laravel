<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>note</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="{{route('index')}}">Volver</a>
	<form method = "POST" action="{{route('update', $note->id)}}">  
		@method('put')
		@csrf
		<label>Tittle</label>
		<input type="text" name="title" value="{{$note->title}}">

		<label>Description</label>
		<input type="text" name="description" value="{{$note->description}}">

		<input type="submit" value="update">
	</form>
</body>
</html>