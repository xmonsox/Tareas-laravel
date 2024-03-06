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

		<label>Description</label>
		<input type="text" name="description">

		<input type="submit" value="create">
	</form>
</body>
</html>