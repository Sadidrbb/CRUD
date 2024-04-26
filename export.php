<?php
//import koneksi ke database
?>
<html>
<head>
  <title>Table Mahasiswa (PDF)</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>List Mahasiswa</h2>
			
				<div class="data-tables datatable-dark">
					
				<table class="table table-bordered" id="aaa" 
                    style="border-collapse: collapse;
                    font-size: 14pt;
                    border: 3px solid #cccccc;
                    margin-left: 0;

                    margin-top: 20px;
                    background-color: #ffffff;">
                <thead>
                <tr style="text-align: center;">
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Status</th>
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
                        
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
				</div>
                <div>
                <a href="index.php" class="btn btn-primary mt-2">Back</a>
                </div>
</div>
	
<script>
$(document).ready(function() {
    $('#aaa').DataTable( {
        dom: 'Bfrtip',
        buttons: [
           'excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>