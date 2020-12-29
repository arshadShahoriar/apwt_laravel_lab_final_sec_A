<!DOCTYPE html>
<html>
<head>
	<title>employee</title>
</head>
<body>
	


	<h3> add product </h3>
	<form action="Employee" method="POST">
		@csrf
	Product Name:
	<input type="text" name="pname"> <br>
	Product Price:
	<input type="number" name="price"> <br>
	Quantity :
	<input type="number" name="quantity"> <br>
<input type="submit" name="submit" value="save"> <br>
	</form>
<table>
	<thead>	
					<th>id</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th></th>
                    <th></th> 
  </thead>
  @foreach($products as $product)
                        <tbody>
                        	<td>{{$product['id']}}</td>
                            <td>{{$product['pname']}}</td>
                            <td>{{$product['quantity']}}</td>
                            <td>{{$product['price']}}</td>
      						<td>
      							<a href={{"delete/".$product['id']}}> Delete </a>
      							<a href={{"edit/".$product['id']}}> Edit </a>
      						</td>
                        </tbody>
                    @endforeach
</table>
</body>
</html>