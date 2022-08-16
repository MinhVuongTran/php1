<?php 
    session_start();
    require_once '../common/common.php';

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
    
    $id = $_GET['id'];

    $cart = $_SESSION['cart'];
    $product = selectById("products", $id);
    $flag = -1;

    foreach ($cart as $key => $value) {
        if($id == $value['id']) {
            $flag = $key;
            break;
        }
    }
    
    if($flag == -1) {
        $product['quantity'] = 1;
        $cart[] = $product;
    } else {
        $cart[$flag]['quantity']++;
    }
    
    $_SESSION['cart'] = $cart;
    header("location: cart-detail.php");
?>