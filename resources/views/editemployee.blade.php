<!DOCTYPE html>
<html>
<head>
	<title>employee</title>
</head>
<body>
	


	<h3> Edit Employee</h3>
	<form action="/editemp" method="POST">
		@csrf
	 Name:
	<input type="text" name="username" value="{{$data['username']}}"> <br>

  <span>@error('username'){{$message}}@enderror</span> <br>
 
	Address:
	<input type="text" name="address" value="{{$data['address']}}"> <br>

  <span>@error('address'){{$message}}@enderror</span> <br>

	phone No :
	<input type="number" name="phoneno" value="{{$data['phoneno']}}"> <br>

  <span>@error('phoneno'){{$message}}@enderror</span> <br>

  Password :
	<input type="Password" name="password" value="{{$data['Password']}}"> <br>

  <span>@error('password'){{$message}}@enderror</span> <br>

<input type="submit" name="submit" value="save"> <br>
	</form>

</body>
</html>