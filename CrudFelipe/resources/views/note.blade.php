<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>note</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method = "POST" action="{{route('store')}}">  
		@csrf
		<label>Tittle</label>
		<input type="text" name="title">
		@error('title')
		<p style="color: red;">{{$message}}</p>
		@enderror
		<label>Description</label>
		<input type="text" name="description">
		@error('title')
		<p style="color: red;">{{$message}}</p>
		@enderror
		<input type="submit" value="create">
	</form>
</body>
</html>