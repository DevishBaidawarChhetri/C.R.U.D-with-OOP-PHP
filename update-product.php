<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OOP PHP</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1>Nepali Handicraft <small>IMS</small></h1>
		</div>
	</div>
	
	<div class="container">
		<a href="index.php">Index</a> / 
		<a href="viewProducts.php">View Products</a> /
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
					<h3 class="card-title">Enter Product Details</h3>
					<?php
						require "product-controller.php";
                        $product = new Product();
                        $data = $product->selectProduct($_GET['edit']);
                        
                        print_r($data);
						// To see data in an array
						// foreach ($data as $details) {
					?>
						<form action="update-action.php" method="POST">
							<table class="table table-hover">
								<tr>
									<td>Product Id</td>
									<td><input type="text" class="form-control" name="u_productId" required value="<?php echo $data[0]['p_id'] ?>"></td>
								</tr>
								<tr>
									<td>Product Name</td>
									<td><input type="text" class="form-control" name="u_productName" required value="<?php echo $data[0]['p_name'] ?>"></td>
								</tr>
								<tr>
									<td>Original Price</td>
									<td><input type="text" class="form-control" name="u_orgPrice" required value="<?php echo $data[0]['org_price'] ?>"></td>
								</tr>
								<tr>
									<td>Discounted Price</td>
									<td><input type="text" class="form-control" name="u_disPrice" required value="<?php echo $data[0]['dis_price'] ?>"></td>
								</tr>
								<tr>
									<td colspan="2" align="center"><input class="btn btn-success" type="submit" value="Update" name="productEdit"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/script.js"></script>
</body>
</html>