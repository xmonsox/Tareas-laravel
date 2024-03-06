<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Show</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="{{route('index')}}">Volver</a>
	<h1>{{$note->title}}</h1>
	<p>{{$note->description}}</p>
</body>
</html>