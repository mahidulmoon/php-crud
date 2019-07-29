<!DOCTYPE html>
<html>
<head>
	<title>Normal Form</title>
</head>
<body>
	<form action="insert.php" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></input></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></input></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone"></input></td>
			</tr>
		</table>
		<input type="submit" value="submit"></input>
	</form>
	<div>
		<?php
			include('showdata.php');
		?>
	</div>
	<div>
		<form action="delete.php" method="post">
			<table>
				<tr>
					<td>Insert Id number:</td>
					<td><input type="text" name="deleteid"></td>
				</tr>
			</table>
			<input type="submit" value="submit" name="">
		</form>
	</div>
	<div>
		<form action="update.php" method="post">
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></input></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></input></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></input></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="text" name="phone"></input></td>
				</tr>
			</table>
			<input type="submit" value="submit"></input>
		</form>
	</div>
</body>
</html>

