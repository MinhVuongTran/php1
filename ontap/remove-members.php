<?php
    require_once "./common.php";
    $id = $_GET['id'];

    deleteValue("members", $id);
    header("location: index.php");
?>
