<?php
    require_once 'db.php';
    
    $mssv = $_GET['mssv'];
    $name = $_GET['name'];
    $year = $_GET['year'];
    $gender = $_GET['gender'];
    $class = $_GET['class'];

    $list = getList();

    $list[] = [strtoupper($mssv), ucwords($name) , $year, $gender, strtoupper($class)];
    saveFileByArr($list);
    header('location: render-list.php');
?>

