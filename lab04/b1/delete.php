<?php
    require_once '../common/common.php';

    $id = $_GET['id'];

    deleteById("users", $id);
    updateId("users");

    header('location: render.php');
?>