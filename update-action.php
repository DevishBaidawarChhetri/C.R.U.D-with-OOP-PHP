<?php
    require "product-controller.php";
    $product = new Product();

    if(isset($_POST['productEdit'])){
        $p_id = $_POST['u_productId'];
        $p_name = $_POST['u_productName'];
        $org_price = $_POST['u_orgPrice'];
        $dis_price = $_POST['u_disPrice'];

        // echo $p_id . "<br>";
        // echo $p_name . "<br>";
        // echo $org_price . "<br>";
        // echo $dis_price . "<br>";

        $product->setProductId($p_id);
        $product->setProductName($p_name);
        $product->setOriginalPrice($org_price);
        $product->setDiscountedPrice($dis_price);

        if($product->updateProduct($p_id))
        {
            header("Location: viewProducts.php?msg=productUpdated");
        }
    }
?>