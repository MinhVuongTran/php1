<?php
require_once "./common.php";

    $name = $_POST['name'];
    $code = $_POST['code'];
    $start_date = $_POST['start_date'];
    $end_date = $_FILES['end_date'];
    $budget = $_POST['budget'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    $insertQuery = "insert into projects (name, code, start_date, end_date, budget, created_at, updated_at) values('$name', '$code', '$start_date', '$end_date', '$budget', '$created_at', '$updated_at')";

    executeQuery($insertQuery);
    header("location: index.php");
?>