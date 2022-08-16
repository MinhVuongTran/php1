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

    $updateQuery = "update projects set name = '$name', code = '$code', start_date = '$start_date', end_date = '$end_date', budget = '$budget', created_at = '$created_at', updated_at = '$updated_at' where id = $id";

    executeQuery($updateQuery);
    header("location: index.php");
?>