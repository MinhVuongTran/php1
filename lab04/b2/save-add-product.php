<?php
    require_once '../common/common.php';
    $id = $_POST['id'];

    $name = $_POST['name'];
    $sku = $_POST['sku'];
    $image = $_FILES['image'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category_id = $_POST['category_id'];
    $detail = $_POST['detail'];

    checkAddProduct($name, $sku, $price, $quantity);

    if(checkAddSkuProduct($sku)['total'] > 0) {
        $skuErr = "Đã tồn tại Sku";
        header("location: add-product.php?skuErr=$skuErr");
        die;
    } else {
        insertValue("products", 
                    ["name", "sku", "image", "price", "quantity", "category_id", "detail"],
                    [$name, $sku, uploadFile($id, "products", $image), $price, $quantity, $category_id, $detail]);
    
        updateId("products");
    
        header('location: render.php');    
    }

?>