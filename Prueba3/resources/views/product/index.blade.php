<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Soy yo</title>
	<link rel="stylesheet" href="">
</head>
<body>
	@forelse($product as $products)
	<div>
		<h3>{{$products->name}}</h3>
		<p>{{$products->short_description}}</p>
		<p>{{$products->price}}</p>
	</div>
	@empty
		<h5>No hay datos</h5>
	@endforelse
</body>
</html>