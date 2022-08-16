<?php
    require_once 'db.php';
    $mssv = $_GET['mssv'];
    $name = $_GET['name'];
    $year = $_GET['year'];
    $gender = $_GET['gender'];
    $class = $_GET['class'];

    $list = getList();
    $index = -1;
    foreach($list as $key => $value){
        if($value[0] == $mssv){
            $index = $key;
            break;
        }
    }
    $list[$index][1] = ucwords($name);
    $list[$index][2] = $year;
    $list[$index][3] = $gender;
    $list[$index][4] = strtoupper($class);
    saveFileByArr($list);
    header("location: render-list.php");
?> 