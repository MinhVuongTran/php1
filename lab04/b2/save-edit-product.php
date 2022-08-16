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

    checkEditProduct($id, $name, $sku, $price, $quantity);

    if(checkEditSkuProduct($sku, $id)['total'] != 0) {
        $skuErr = "Đã tồn tại Sku";
        header("location: edit-product.php?id=$id&skuErr=$skuErr");
        die;
    } else {
        updateValue($id, "products", 
                    ["name", "sku", "image", "price", "quantity", "category_id", "detail"],
                    [$name, $sku, uploadFile($id, "products", $image), $price, $quantity, $category_id, $detail]);
    
        header('location: render.php');
    }
    
?>