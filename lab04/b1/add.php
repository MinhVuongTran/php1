<?php
    require_once '../common/common.php';

    $id = $_POST['id'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $file = $_FILES['avatar'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    insertValue("users", ["name", "email", "avatar", "password"],
                         [$name, $email, uploadFile($id, "users", $file), $password]);
    updateId("users");

    header('location: render.php');
?>