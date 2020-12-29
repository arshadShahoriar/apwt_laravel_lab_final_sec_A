<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<form action="Registration" method="POST">
		
		@csrf	

		<fieldset>
			<legend>Registration</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="name"></td>
			</tr>


				<tr>
				<td>phone No</td>
				<td><input type="text" name="phone_no"></td>
			</tr>

				<tr>
				<td>Address</td>
				<td><input type="text" name="Address"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		</fieldset>

	</form>
</body>
</html>