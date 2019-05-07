<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php
		require_once 'process.php'
	?>

	<div class="row justify-content-center">
		<form action="process.php" method="POST">
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" type="text" name="name" value="Enter your name">
			</div>
			<div class="form-group">
				<label>Location</label>
				<input class="form-control" type="text" name="location" value="Enter your location">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="save">Save</button>
			</div>
		</form>
	</div>
</body>
</html>