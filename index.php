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
		if(isset($_GET['msg']) && $_GET['msg'] == 'productAdded'){
	?>
	<script type="text/javascript">
		window.alert("Product Added Successfully!!!");
	</script>
		<?php } ?>
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
					<h3 class="card-title">Enter Product Details</h3>
						<form action="product-action.php" method="POST" enctype="multipart/form-data">
							<table class="table table-hover">
								<tr>
									<td>Product Name</td>
									<td><input type="text" class="form-control" name="productName" placeholder="Enter Product Name" required></td>
								</tr>
								<tr>
									<td>Original Price</td>
									<td><input type="text" class="form-control" name="orgPrice" placeholder="Enter Product Original Price" required></td>
								</tr>
								<tr>
									<td>Discounted Price</td>
									<td><input type="text" class="form-control" name="disPrice" placeholder="Enter Product Discounted Price" required></td>
								</tr>
								<tr>
									<td>Product's Image</td>
									<td><input type="file" class="form-control" name="image" required></td>
								</tr>
								<tr>
									<td colspan="2" align="center"><input class="btn btn-success" type="submit" name="productSubmit"></td>
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