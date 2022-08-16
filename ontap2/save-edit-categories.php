<?php
    require_once "./common.php";

    $id = $_POST['cate_id'];
    $cate_name = $_POST['cate_name'];

    $update = "update categories set cate_name = '$cate_name' where cate_id = $id";

    executeQuery($update);
    header("location: index.php");
?>