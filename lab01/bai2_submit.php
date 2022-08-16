<?php
    $numberA = $_GET['number_a'];
    $numberB = $_GET['number_b'];
    $isSuccess = true;
    $sum = 0;
    $countSumEven = 0;
    if ($numberA <= 0 || $numberB <= 0) {
        echo 'Vui lòng nhập a, b lớn hơn 0';
        $isSuccess = false;
    } else if ($numberA > $numberB) {
        echo 'Vui lòng nhập a nhỏ hơn b';
        $isSuccess = false;
    }
    for ($i = $numberA; $i <= $numberB; $i++) {
        if ($isSuccess) {
            $sum += $i;
        }
    }
    for ($i = $numberA; $i <= $numberB; $i++) {
        if ($isSuccess) {
            if ($i % 2 == 0) {
                $countSumEven ++;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>Số a là: <?php echo $numberA ?></h3>
    <h3>Số b là: <?php echo $numberB ?></h3>
    <h3>Tổng các số trong khoảng a đến b là: <?php echo $sum ?></h3>
    <h3>Các số chẵn trong khoảng a đến b là: <?php echo $countSumEven ?></h3>
</body>
</html>