<?php
    require_once "./common.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $code = $_POST['code'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $budget = $_POST['budget'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    $nameErr = "";
    $codeErr = "";
    $budgetErr = "";

    if(strlen($name) == 0) {
        $nameErr = "Vui long nhap ten";
    }

    if(strlen($code) == 0) {
        $codeErr = "Vui long nhap code";
    }

    if(strlen($budget) == 0) {
        $budgetErr = "Vui long nhap budget";
    }

    if(!empty($nameErr) || !empty($codeErr) || !empty($budgetErr)){
        header("location: edit-projects.php?id=$id&nameErr=$nameErr&codeErr=$codeErr&budgetErr=$budgetErr");
        die;
    }

    $update = "update projects set name = '$name', code = '$code', start_date = '$start_date', end_date = '$end_date', budget = '$budget', created_at = '$created_at', updated_at = '$updated_at' where id = $id";

    execQuery($update);
    header("location: index.php");
?>