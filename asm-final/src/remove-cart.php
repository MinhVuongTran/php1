<?php
    require_once "../common/common.php";
    session_start();
    $cart = $_SESSION['cart'];
    $flag = -1;
    $id = $_GET['id'];
    if($id) {
        foreach ($cart as $key => $value) {
            if($value['id'] == $id) {
                $flag = $key;
            }
        }
        unset($cart[$flag]);
    } else {
        unset($cart);
    }
    
    $_SESSION['cart'] = $cart;
    header("location: cart-detail.php");
    
?>