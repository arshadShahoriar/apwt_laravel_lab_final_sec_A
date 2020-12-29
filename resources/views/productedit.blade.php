<!DOCTYPE html>
<html>
<head>
	<title>employee</title>
</head>
<body>
	


	<h3> Edit product </h3>
	<form action="/edit" method="POST">
		@csrf
	Product Name:
	<input type="text" name="pname" value="{{$data['pname']}}"> <br>

  <span>@error('pname'){{$message}}@enderror</span> <br>
 
	Product Price:
	<input type="number" name="price" value="{{$data['price']}}"> <br>

  <span>@error('price'){{$message}}@enderror</span> <br>

	Quantity :
	<input type="number" name="quantity" value="{{$data['quantity']}}"> <br>

  <span>@error('quantity'){{$message}}@enderror</span> <br>

<input type="submit" name="submit" value="save"> <br>
	</form>

</body>
</html>