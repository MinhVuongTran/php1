<?php
    require_once "./common.php";
    $id = $_GET['id'];
    $delete = "delete from categories where cate_id = $id";
    executeQuery($delete);
    header("location: index.php");
?>