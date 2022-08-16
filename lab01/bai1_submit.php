<?php 
    $fullname = $_GET['fullname'];
    $studentID = $_GET['student_id'];
    $gender = $_GET['gender'] === 'male' ? 'Nam' : 'Nữ';
    $address = $_GET['address'];
    $address = $_GET['address'];
    $specialized = $_GET['specialized'];
    switch ($specialized) {
        case 'web':
            $specialized = 'Thiết kế web';
            break;
        case 'mobile':
            $specialized = 'Lập trình mobile';
            break;
        case 'software':
            $specialized = 'Phát triển phần mềm';
            break;
        case 'graphic':
            $specialized = 'Thiết kế đồ họa';
            break;
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
        }
        .wrap {
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <h1>Thông tin cá nhân</h1>
        <div class="wrap">
            <div>
                <h3>Họ và tên: <?php echo $fullname?></h3>
                <h3>Mã sinh viên: <?php echo $studentID?></h3>
                <h3>Giới tính: <?php echo $gender?></h3>
                <h3>Địa chỉ: <?php echo $address?></h3>
                <h3>Chuyên ngành: <?php echo $specialized?></h3>
            </div>
        </div>
    </div>
</body>
</html>