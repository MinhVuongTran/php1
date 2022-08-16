<?php
    require_once "./common.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $is_leader = $_POST['is_leader'];
    $project_id = $_POST['project_id'];
    $avatar = $_FILES['avatar'];

    if($avatar['name'] === "" || $avatar['size'] == 0) {
        $query = "select * from members where id = $id";
        $member = getAllValue($query, false);
        $avatarSrc = $member['avatar'];
    } else {
        $avatarSrc = "./uploads/" . $avatar['name'];
        move_uploaded_file($avatar['tmp_name'], $avatarSrc);
    }

    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $phone = $_POST['phone'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    $updateQuery = "update members set name = '$name', is_leader = '$is_leader', project_id = '$project_id', avatar = '$avatarSrc', department = '$department', salary = '$salary', created_at = '$created_at', updated_at = '$updated_at' where id = $id";

    executeQuery($updateQuery);
    header("location: index.php");
?>