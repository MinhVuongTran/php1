<?php
    require_once "./common.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $is_leader = $_POST['is_leader'];
    $project_id = $_POST['project_id'];
    $file = $_FILES['avatar'];
    if ($file['name'] === "") {
        $query = "select * from members where id = $id";
        $data = getValue($query, false);
        $avatar = $data['avatar'];
    } else {
        $avatar = "./uploads/" . $file['name'];
        move_uploaded_file($file['tmp_name'], $avatar);
    }

    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $phone = $_POST['phone'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    $nameErr = "";
    $is_leader_err = "";
    $project_id_err = "";
    $departmentErr = "";
    $salaryErr = "";
    $phoneErr = "";


    if(strlen($name) == 0) {
        $nameErr = "Vui long nhap ten";
    }

    if(strlen($is_leader) == 0) {
        $is_leader_err = "Vui long nhap is_leader";
    }

    if(strlen($department) == 0) {
        $departmentErr = "Vui long nhap department";
    }

    if(strlen($salary) == 0) {
        $salaryErr = "Vui long nhap salary";
    } else if($salary < 0){
        $salaryErr = "Vui long nhap so lon hon 0";
    }

    if(strlen($phone) == 0) {
        $phoneErr = "Vui long chon phone";
    }

    if(!empty($nameErr) || !empty($is_leader_err) || !empty($project_id_err) || !empty($departmentErr) || !empty($salaryErr) || !empty($phoneErr)){
        header("location: edit-members.php?id=$id&nameErr=$nameErr&is_leader_err=$is_leader_err&departmentErr=$departmentErr&salaryErr=$salaryErr&phoneErr=$phoneErr");
        die;
    }

    $update = "update members set name = '$name', is_leader = '$is_leader', project_id = '$project_id', avatar = '$avatar', department = '$department', salary = '$salary', phone = '$phone', created_at = '$created_at', updated_at = '$updated_at' where id = $id";

    execQuery($update);
    header("location: index.php");
?>