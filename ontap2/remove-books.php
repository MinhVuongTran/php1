<?php
    require_once "./common.php";
    $id = $_GET['id'];
    $delete = "delete from books where book_id = $id";
    executeQuery($delete);
    header("location: index.php");
?>