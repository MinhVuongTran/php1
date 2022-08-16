<?php
    require_once "./common.php";

    $id = $_GET['id'];
    delete("members", $id);
    header("location: index.php");
?>