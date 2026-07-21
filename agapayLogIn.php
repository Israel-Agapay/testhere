<!DOCTYPE html>
<html>
<head>
	<title>LOG IN</title>

	<style>
		body{
			background-color: goldenrod;
		}
		h1{
			color: blue;
			font-family: tahoma;
			font-family: 35px;
		}
		h2{
			color: green;
			font-size: 20px;
		}
		.agapayLogIn{
			background-color: red;
			color: white;
			font-size: 20px;
			width: 150px;
			height: 40px;
		}
		.agapayClear{
			background-color: green;
			color: white;
			font-size: 20px;
			width: 150px;
			height: 40px;
		}
	</style>
</head>
<body>
	<h1>LOGIN FORM</h1>
<h2>
	<table>
		<tr>
			<td><label>Username</label></td>
			<td><input type="text" name="agapayUsername"></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type="Password" name="agapayPassword"></td>
		</tr>
	</table>
</h2>

<button class="agapayLogIn">LOG IN</button>
<button class="agapayClear">LOG IN</button>

<a href="agapayRegistration.php"><p><b>REGISTRATION</b></p></a>

</body>
</html>