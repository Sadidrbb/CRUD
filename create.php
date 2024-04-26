<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Add New</title>
</head>
<body>
	<div class="container">
		<header class="d-flex justify content between my-4">
			<h1>Add New</h1>
		</header>
		<form action="process.php" method="post">
			<div class="form-element my-4">
				<input type="text" class="form-control" name="title" placeholder="Name: ">
			</div>
			<div class="form-element my-4">
				<input type="text" class="form-control" name="author" placeholder="Age: ">
			</div>
			<div class="form-element my-4">
				<select name="type" class="form-control">
					<option value="">Status</option>
					<option value="Mahasiswa">Mahasiswa</option>
					<option value="Mahasiswi">Mahasiswi</option>
				</select>
			</div>
			<div class="form-element my-4">
				<input type="text" class="form-control" name="description" placeholder="Description: ">
			</div>
			<div class="form-element">
				<input type="submit" class="btn btn-success" name="create" value="Add New">
			</div>
			<div>
				<a href="index.php" class="btn btn-primary mt-2">Back</a>
			</div>
		</form>
	</div>
</body>
</html>