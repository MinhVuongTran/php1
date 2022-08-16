<?php
    require_once "../common/common.php";
    $id = $_GET['id'];

    deleteById("products", $id);
    updateId("products");

    header('location: render.php');
?>