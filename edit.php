<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Edit</title>
</head>
<body>
	<div class="container">
		<header class="d-flex justify content between my-4">
			<h1>Edit</h1>
		</header>
		<?php
			if (isset($_GET["id"])){
				$id = $_GET["id"];
				include("connect.php");
				$sql = "SELECT * FROM data WHERE id=$id";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result);

			?>
			<form action="process.php" method="post">
			<div class="form-element my-4">
				<input type="text" class="form-control" name="title" value="<?php echo $row["title"] ?>" placeholder="Book title: ">
			</div>
			<div class="form-element my-4">
				<input type="text" class="form-control" value="<?php echo $row["author"] ?>" name="author" placeholder="Author: ">
			</div>
			<div class="form-element my-4">
				<select name="type" class="form-control">
					<option value="">Select book type</option>
					<option value="Mahasiswa" <?php if($row['type']=="Mahasiswa"){echo "selected";} ?>>Mahasiswa</option>
					<option value="Mahasiswi" <?php if($row['type']=="Mahasiswi"){echo "selected";} ?>>Mahasiswi</option>
				</select>
			</div>
			<div class="form-element my-4">
				<input type="text" class="form-control" value="<?php echo $row["description"] ?>" name="description" placeholder="Book description: ">
			</div>
			<input type="hidden" name="id" value='<?php echo $row['id']; ?>'>
			<div class="form-element">
				<input type="submit" class="btn btn-success" name="edit" value="Edit">
			</div>
			<div>
				<a href="index.php" class="btn btn-primary mt-2">Back</a>
			</div>
			</form>

			<?php
			}
		?>
	</div>
</body>
</html>