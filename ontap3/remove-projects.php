<?php
    require_once "./common.php";

    $id = $_GET['id'];
    delete("projects", $id);
    header("location: index.php");
?>