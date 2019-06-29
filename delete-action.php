<?php
    require "product-controller.php";
    $product = new Product();

    $p_id = $_GET['delete'];
    // echo $p_id;
    // exit;

    $product->setProductId($p_id);
    
    if($product->deleteProduct($p_id))
    {
        header("Location: viewProducts.php?msg=productDeleted");
    }else{
        echo "Something Went Wrong!";
    }
?>