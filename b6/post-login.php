<?php
    session_start();
    $connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");
    /**
     * Nhận dữ liệu từ form dựa vào email tìm kiếm trong csdl lấy ra bản ghi đầu tiên tìm được
     * so sánh mật khẩu người dùng gửi lên và mật khẩu trong db
     * nếu không khớp thì tạo session auth và chuyển hướng website sang a.php
     * nếu không tìm thấy bản ghi dựa vào email hoặc không khớp được mật khẩu thì điều hướng
     * về trang login.php
     */

    $email = $_POST['email'];
    $password = $_POST['password'];

    $emailError = "";
    $passwordError = "";

    if(strlen($email) == 0) {
        $emailError = "Hãy nhập email";
    }

    if(strlen($password) == 0) {
        $passwordError = "Hãy nhập password";
    }

    if(!empty($emailError) || !empty($passwordError)) {
        header("location: login.php?emailError=$emailError&passwordError=$passwordError");
        die;
    }

    $sqlQuery = "select * from users where email = '$email'";
    $stmt = $connect -> prepare($sqlQuery);
    $stmt -> execute();
    $user = $stmt -> fetch();

    if($user && password_verify($password, $user['password'])) {
        unset($user['password']);
        $_SESSION['auth'] = $user;
        header("location: a.php");
        die;
    }

    header("location: login.php");
?>