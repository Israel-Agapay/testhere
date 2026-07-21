<!DOCTYPE html>
<html>
<head>
	<title>ADDITION</title>
	<style>
		body{
			background-color: goldenrod;
		}
		h1{
			color: blue;
			font-size: 40px;
			font-family: tahoma;
		}
		h2{
			color: green;
			font-family: tahoma;
		}
		.agapayCompute{
			background-color: grey;
			color: white;
			width: 120px;
			height: 30px;
		}
	</style>
</head>
<body>

	<?php
		if($_SERVER["REQUEST_METHOD"] === "POST"){
			$agapaynum1 = $_POST['agapaynum1'];
			$agapaynum2 = $_POST['agapaynum2'];
	?>

		<?php	
			if(is_numeric($agapaynum1) && is_numeric($agapaynum2)){
				$result = $agapaynum1 + $agapaynum2;
			}else{
				$result = "Please enter valid numbers.";
			}
		?>

			<!-- <?php echo "<h1>The sum of: " . $result . "</h1>"; ?> -->
	<?php
		}
	?>

	<h1>ADDITION</h1>
	<form method="POST" action="agapayAddition.php">
		<h2>
			<table>
				<tr>
					<td><label>First Number: </label></td>
					<td><input type="Number" placeholder="First Number" name="agapaynum1"></td>
				</tr>
				<tr>
					<td><label>Second Number: </label></td>
					<td><input type="Number" placeholder="Second Number"  name="agapaynum2"></td>
				</tr>
				<tr>
					<td><button class="agapayCompute" type="submit">Compute</button></td>
				</tr>
				<tr>
					<td><label>The sum of two numbers is:  </label></td>
					<td>
						<input type="Number" placeholder="Result here!" 
						value="<?php echo isset($result) ? $result : ""; ?>" readonly>
					</td>
				</tr>
			</table>
		</h2>
	</form>
</body>
</html>