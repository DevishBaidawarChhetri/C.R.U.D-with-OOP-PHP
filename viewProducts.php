<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OOP PHP</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
		td{
			text-align: center !important;
			vertical-align: middle !important;
		}
	</style>
</head>
<body>
	<?php 
		if(isset($_GET['msg']) && $_GET['msg'] == 'productUpdated'){
	?>
	<script type="text/javascript">
		window.alert("Product Updated Successfully!!!");
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
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table table-bordered">
					<tr>
						<th>#</th>
						<th>Product Image</th>
						<th>Product Name</th>
						<th>Original Price</th>
						<th>Discounted Price</th>
						<th colspan="2" style="text-align: center;">Action</th>
					</tr>					
						<?php
                        require "product-controller.php";
						$product = new Product();
						$data = $product->selectAddedProduct();
						// print_r($data);
						// To see data in an array
						
						$countttt = count($data);
						// To count data in an array
						foreach ($data as $details) { ?>
							<tr>
								<td><?php echo $details['p_id']; ?></td>
								<td>
									<img style="height: 100px; width: 100px;" src="images/product-images/<?php echo $details['image']; ?>">
								</td>
								<td><?php echo $details['p_name']; ?></td>
								<td><b><del><?php echo $details['org_price']; ?></del></b></td>
								<td><b><?php echo $details['dis_price']; ?></b></td>
								<td><a href="update-product.php?edit=<?php echo $details['p_id']; ?>" class="btn btn-primary">Edit</a></td>
								<td><a href="delete-action.php?delete=<?php echo $details['p_id']; ?>" class="btn btn-danger" onclick="Javascript: return confirm('Are you sure you want to delete?');" name="productDelete">Delete</a></td>
							</tr>
						<?php } ?>
				</table>
				<p>Total Products: <?php echo $countttt; ?></p>
			</div>
			<div class="col-md-2"></div>
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