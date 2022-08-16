<?php
    require_once "db.php";
    $mssv = $_GET['mssv'];
    $products = getList();
    $index = "";
    
    foreach ($products as $key => $value) {
        if($value[0] == $mssv) {
            $index = $key;
            break;
        }
    }
    unset($products[$index]);
    saveFileByArr($products);
    header('location: render-list.php');
?>