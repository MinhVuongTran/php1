<?php
require_once "./common.php";

    $name = $_POST['name'];
    $is_leader = $_POST['is_leader'];
    $project_id = $_POST['project_id'];
    $avatar = $_FILES['avatar'];
    $avatarSrc = "./uploads/" . $avatar['name'];
    move_uploaded_file($avatar['tmp_name'], $avatarSrc);
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $phone = $_POST['phone'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    $insertQuery = "insert into members (name, is_leader, project_id, avatar, department, salary, phone, created_at, updated_at) values('$name', '$is_leader', '$project_id', '$avatarSrc', '$department', '$salary', '$phone', '$created_at', '$updated_at')";

    executeQuery($insertQuery);
    header("location: index.php");
?>