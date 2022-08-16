<?php
    session_start();
    // 1. Dòng đầu tiên của request thì cần gọi hàm session_start();
    // 2. Để tạo mới 1 phần tử trong session_start();
    // $_SESSION['ten_phan_tu'] = giá trị;
    // 3. Xóa 1 phần tử trong session: unset($_SESSION['ten_phan_tu']);
    // 4. Xóa toàn bộ session của website: session_destroy();

    // Để vào được trang a.php thì cần kiểm tra xem người dùng đã đăng nhập hay chưa

    if(!$_SESSION['auth'] || empty($_SESSION['auth'])) {
        header("location: login.php");
        die;
    } 

    $connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

    $sqlQuery = 'select * from users';
    $stmt = $connect -> prepare($sqlQuery);
    $stmt -> execute();
    $data = $stmt -> fetchAll();
?>
Xin chào, <?= $_SESSION['auth']['name'] ?>
<a href="logout.php">Đăng xuất</a>