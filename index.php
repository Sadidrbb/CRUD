<?php
session_start();
if (!isset($_SESSION["user"])) {
	header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>Mainpage</title>
</head>
<body>
	<div class="container">
		<img src="unpam.png">
		<h1 style="margin-top: -191px; margin-bottom: 20px;">Welcome</h1>
		<a href="logout.php" class="btn btn-warning mt-4" style="margin-bottom: 20px;">Logout</a>
	</div>

	<div class="container2">
		<header class="d-flex justify content between my-4">
			<div class="book-list" style="margin-left: 25.5%;">
			
		</div>
		</header>
		<?php
		
		if (isset($_SESSION["create"])) {
			?>
			<div class="alert alert-success">
				<?php
				echo $_SESSION["create"];
				unset ($_SESSION["create"]);
				?>
			</div>
			<?php
		}
		?>
		<?php
		
		if (isset($_SESSION["edit"])) {
			?>
			<div class="alert alert-success">
				<?php
				echo $_SESSION["edit"];
				unset ($_SESSION["edit"]);
				?>
			</div>
			<?php
		}
		?>
		<?php
		
		if (isset($_SESSION["delete"])) {
			?>
			<div class="alert alert-success">
				<?php
				echo $_SESSION["delete"];
				unset ($_SESSION["delete"]);
				?>
			</div>
			<?php
		}
		?>
		<div>
			<h1 style="margin-top: 15px; margin-bottom: -8px; margin-left: 25.5%">List Mahasiswa</h1>
		</div>
		<table class="table table-bordered" id="aaa" 
		style="border-collapse: collapse;
	    font-size: 14pt;
	    border: 3px solid #cccccc;
	    
	    width: 725px;
	    margin-left: 24.8%;
	    margin-top: 20px;
	    background-color: #ffffff;">
			<thead>
				<tr style="text-align: center;">
					<th>#</th>
					<th>Name</th>
					<th>Age</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include("connect.php");
				$no = 1;
				$sql = "SELECT * FROM data";
				$result = mysqli_query($conn, $sql);
				
				while ($row = Mysqli_fetch_array($result)) {
					?>
					<tr>
						<td align="center"><?php echo $no++; ?></td>
						<td><?php echo $row["title"]; ?></td>
						<td><?php echo $row["author"]; ?></td>
						<td><?php echo $row["type"]; ?></td>
						
						<td style="text-align: center;">
							<a href="view.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">Read More</a>
							<a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">Edit</a>
							<a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
		<div class="button" style="margin-left: 24.8%;">
				<a href="create.php" class="btn btn-primary" >Add New</a>
			</div>
		
		<form action="export.php" method="post" class="mt-2" style="margin-left: 24.8%;">
			<input type="submit" name="submit" class="btn btn-outline-danger" value="Export to PDF">
		</form>
	</div>
</body>
</html>