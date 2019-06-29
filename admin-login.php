<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OOP PHP</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
	if(isset($_GET['msg']) && $_GET['msg'] == 'incorrect'){
		echo "<script>window.alert('Incorrect Username or Password!');</script>";
	}
	if(isset($_GET['msg']) && $_GET['msg'] == 'logout'){
		echo "<script>window.alert('Successfully Logout!');</script>";
	}
?>
	<div class="container">
		<div class="jumbotron">
			<h1>Nepali Handicraft <small>IMS</small></h1>
		</div>
	</div>
	<div class="container">
		<a href="index.php">Index</a> / 
		<a href="viewProducts.php">View Products</a> / 
		<a href="admin-login.php">Admin Login</a>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
					<h3 class="card-title">Admin Login</h3>
						<form action="adminLogin-action.php" method="POST">
							<table class="table table-hover">
								<tr>
									<td>Username</td>
									<td><input type="text" class="form-control" name="adminUsername" placeholder="Enter Username" required></td>
								</tr>
								<tr>
									<td>Password</td>
									<td><input type="text" class="form-control" name="adminPassword" placeholder="Enter Password" required></td>
								</tr>
								<tr>
									<td colspan="2" align="center"><input class="btn btn-success" type="submit" name="adminLoginSubmit" value="Login"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div><br>
	<div class="container">
		<div class="jumbotron">
			<h1>CRUD <small>using </small>PHP OOP</h1>
		</div>
	</div>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/script.js"></script>
</body>
</html>