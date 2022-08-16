<?php
    require_once "./common.php";
    $id = $_GET['id'];

    deleteValue("projects", $id);
    header("location: index.php");
?>
