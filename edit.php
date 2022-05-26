<?php
	//include our connection
	include 'dbconfig.php';
 
	//get the row of selected id
	$sql = "SELECT rowid, * FROM members WHERE rowid = '".$_GET['id']."'";
	$query = $db->query($sql);
	$row = $query->fetchArray();
 
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<title>CRUD MCO</title>
</head>
<body class="h-100">
                <h2 class="text-center">Edit Info</h2>
<form method="POST">
<form>
<div class="container mt-5">
	
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
  			<div class="row mb-4" >
    			<div class="col">
      			<div class="form-outline">
				  	<input type="text" id="firstname" name="firstname" class="form-control">
        			<label class="form-label" for="firstname">First name</label>
      			</div>
    		</div>
    	<div class="col">
      <div class="form-outline">
        <input type="text" id="lastname" name="lastname" class="form-control">
        <label class="form-label" for="lastname">Last name</label>
      </div>
    </div>
  </div>
  
  <div class="form-outline mb-4">
    <input type="text" id="address" name="address" class="form-control">
    <label class="form-label" for="address">Address</label>
  </div>


  <input type="submit" name="save" value="save" class="btn btn-primary btn-block mb-4">
  <a type="button" href="index.php" class="btn btn-primary btn-block mb-4">Back</a>

  </div>
</form>
<?php
	if(isset($_POST['save'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
 
		//update our table
		$sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', address = '$address' WHERE rowid = '".$_GET['id']."'";
		$db->exec($sql);
 
		header('location: index.php');
	}
?>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js">
</script>
</body>
</html>