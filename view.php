<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Details</title>

<style type="text/css">
	.book-details{
		background: #f5f5f5;
		padding: 50px;
	}
</style>

</head>
<body>

	<div class="container">
		<header class="d-flex justify content between my-4">
			<h1>Details</h1>
			
		</header>
		<div class="book-details my-4">
			<?php 
			if(isset($_GET["id"])){
				$id = $_GET["id"];
				include("connect.php");
				$sql = "SELECT * FROM data WHERE id=$id";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result);
				?>
				<h2>Name</h2>
				<p><?php echo $row["title"]; ?></p>
				<h2>Description</h2>
				<p><?php echo $row["description"]; ?></p>
				<h2>Status</h2>
				<p><?php echo $row["type"]; ?></p>
				<h2>Age</h2>
				<p><?php echo $row["author"]; ?></p>
				<?php
			}
			?>
		</div>
		<div>
				<a href="index.php" class="btn btn-primary">Back</a>
			</div>
	</div>

</body>
</html>