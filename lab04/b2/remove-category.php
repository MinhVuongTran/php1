<?php
    require_once '../common/common.php';
    $id = $_GET['id'];

    deleteById("categories", $id);
    updateId("categories");

    header('location: render.php');
?>