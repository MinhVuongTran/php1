<?php 
    require_once '../common/common.php';

    $id = $_POST['id'];

    $name = $_POST['name'];

    checkCategories($name, $id);
    
    updateValue($id, "categories", ["name"], [$name]);

    header('location: render.php');
?>