<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form action="calc.php" method="POST">
		<input type="text" name="num1" placeholder="Enter first number">
		<br />
		<input type="text" name="num2" placeholder="Enter second number">
		<br />
		<select name="cal">
			<option value="add">Add</option>
			<option value="sub">Subtract</option>
			<option value="mul">Multiply</option>
		</select>
		<button type="submit">Calculate</button>
	</form>
</body>

</html>