<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post-login.php" method="post">
        <div>
            email: <input type="text" name="email">
            <?php if(isset($_GET['emailError'])): ?>
                <span style="color: red"><?= $_GET['emailError']?></span>
            <?php endif ?>
        </div>
        <div>
            password: <input type="password" name="password">
            <?php if(isset($_GET['passwordError'])): ?>
                <span style="color: red"><?= $_GET['passwordError']?></span>
            <?php endif ?>
        </div>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>