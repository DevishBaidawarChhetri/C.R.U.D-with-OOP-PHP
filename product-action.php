<?php
    require "product-controller.php";
    $product = new Product();

    if(isset($_POST['productSubmit'])){
        $p_name = $_POST['productName'];
        $org_price = $_POST['orgPrice'];
        $dis_price = $_POST['disPrice'];

        // For Image
         $randomNumber = rand(10000, 100000000);
        
        $filename = $_FILES['image']['name'];

        $file = explode('.',$filename);
        $count = count($file);
        $ext = $file[$count-1];
        $imageName = $randomNumber.'.'.$ext;
        // exit;

        if($ext=='jpg'||$ext=='png'||$ext=='gif' ||$ext=='jpeg'){
            move_uploaded_file($_FILES['image']['tmp_name'],'images/product-images/'.$imageName);
        }
        else{
            echo 'Wrong file type!'.'<br><a href="index.php">Go back!</a>';
        }

        $product->setProductName($p_name);
        $product->setOriginalPrice($org_price);
        $product->setDiscountedPrice($dis_price);
        $product->setProductImage($imageName);


        if($product->addProduct())
        {
            header("Location: index.php?msg=productAdded");
        }
    }
?>