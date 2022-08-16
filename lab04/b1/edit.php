<?php 
    require_once '../common/common.php';

    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $file = $_FILES['avatar'];

    updateValue($id, "users", ["name", "avatar"], [$name, uploadFile($id, "users", $file)]);
    updateId("users");
    
    header('location: render.php');
?>