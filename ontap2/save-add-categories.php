<?php
    require_once "./common.php";
    $cate_name = $_POST['cate_name'];

    $insertQuery = "insert into categories (cate_name) 
                    values ('$cate_name')";
    
    executeQuery($insertQuery);
    header("location: index.php");
?>