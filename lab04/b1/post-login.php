<?php
    session_start();
    require_once "../common/common.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    checkEmailAndPassword($email, $password);
?>