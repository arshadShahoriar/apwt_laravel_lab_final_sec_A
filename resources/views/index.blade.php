<!DOCTYPE html>
<html>
<head>
	<title>employee</title>
</head>
<body>
	employee

	<form action="login" method="POST">
		
		@csrf		

		<fieldset>
			<legend>Login</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
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