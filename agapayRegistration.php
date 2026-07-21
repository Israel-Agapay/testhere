<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>

	<style>
		body{
			background-color: goldenrod;
		}
		h1{
			color: blue;
			font-family: tahoma;
			font-size: 40px;
		}
		h2{
			color: green;
			font-family: 20px;
			font-family: Montserrat;
		}
		.agapayRegistration{
			background-color: cyan;
			color: white;
			width: 150px;
			height: 40px;
			font-size: 20px;
		}
		.agapayClear{
			background-color: green;
			color: white;
			width: 150px;
			height: 40px;
			font-size: 20px;
		}
	</style>
</head>
<body>

	<h1>REGISTRATION FORM</h1>

	<h2>
		<table>
			<tr>
				<td>Full Name</td>
				<td></td>
				<td><input type="text" name="agapayFname"></td>
				<td><input type="text" name="agapayLname"></td>
			</tr>
			<tr>
				<td></td><td></td>
				<td>First Name</td>
				<td>Last Name</td>
			</tr>
				<td>E-Mail</td>
				<td></td>
				<td><input type="text" name="agapayEmail"></td>
			</tr>
			</tr>
				<td>Username</td>
				<td></td>
				<td><input type="text" name="agapayUsername"></td>
			</tr>
			</tr>
				<td>Password</td>
				<td></td>
				<td><input type="Password" name="agapayPassword"></td>
			</tr>
			</tr>
				<td>Confirm Password</td>
				<td></td>
				<td><input type="Password" name="agapayConPassword"></td>
			</tr>
			</tr>
				<td>Phone Number</td>
				<td></td>
				<td><input type="Number" name="agapayPhoneNumber"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td></td>
				<td><input type="text" name="agapayStreetAdd"></td>
				<td><input type="text" name="agapayBarangay"></td>
			</tr>
			<tr>
				<td></td><td></td>
				<td>Street Add</td>
				<td>Barangay</td>
			</tr>
			<tr>
				<td></td><td></td>
				<td><input type="text" name="agapayCity"></td>
				<td><input type="text" name="agapay>StateProvince"></td>
			</tr>
			<tr>
				<td></td><td></td>
				<td>City</td>
				<td>State/Province</td>
			</tr>
			<tr>
				<td></td><td></td>
				<td><input type="text" name="agapayZipCode"></td>
				<td><input type="text" name="agapayCountry"></td>
			</tr>
			<tr>
				<td></td><td></td>
				<td>Zip Code</td>
				<td>Country</td>
			</tr>
		</table>
	</h2>

	<a href="agapayLogIn.php"><button class="agapayRegistration">REGISTER</button></a>
	<button class="agapayClear">CLEAR</button>

</body>
</html>