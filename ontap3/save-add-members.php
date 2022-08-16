<?php
    require_once "./common.php";

    $name = $_POST['name'];
    $is_leader = $_POST['is_leader'];
    $project_id = $_POST['project_id'];
    $file = $_FILES['avatar'];

    $avatar = "./uploads/" . $file['name'];
    move_uploaded_file($file['tmp_name'], $avatar);

    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $phone = $_POST['phone'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    $insert = "insert into members (name, is_leader, project_id, avatar, department, salary, phone, created_at, updated_at) values ('$name', '$is_leader', '$project_id', '$avatar', '$department', '$salary', '$phone', '$created_at', '$updated_at')";

    execQuery($insert);
    header("location: index.php");
?>