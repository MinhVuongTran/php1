<?php
    require_once '../common/common.php';
    $name = $_POST['name'];

    checkCategories($name);

    insertValue("categories", ["name"], [$name]);
    updateId("categories");
    header('location: render.php');
?>