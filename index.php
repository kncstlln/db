<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crud MCO</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href= "cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
</head>
<body>
<table border="1">
<table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Address</th>
            <th width="250px">Action</th>
        </tr>
	<tbody>
	
		<?php
			//include our connection
			include 'dbconfig.php';
 
			//query from the table that we create
			$sql = "SELECT rowid, * FROM members";
			$query = $db->query($sql);
 
			while($row = $query->fetchArray()){
				echo "
					<tr>
						<td>".$row['rowid']."</td>
						<td>".$row['firstname']."</td>
						<td>".$row['lastname']."</td>
						<td>".$row['address']."</td>
						<td>
							<a href='edit.php?id=".$row['rowid']."'>Edit</a>
							<a href='delete.php?id=".$row['rowid']."'>Delete</a>
						</td>
					</tr>
				";
			}
		?>
	</tbody>
</table>
<div class="container">
  <div class="row">
    <div class="col text-center">
		<a type="button" href="add.php" class="btn btn-primary">Add</a>
		</div>
  </div>
</div>
</body>
</html>