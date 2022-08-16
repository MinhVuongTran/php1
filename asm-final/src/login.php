<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../common/index.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <form class="form" action="post-login.php" method="post">
            <div class="form-group">
            <label class="form-label">Email</label> 
            <input class="form-control" type="text" name="email">
            <?php if(isset($_GET['emailErr'])): ?>
                <p class="error-massage" style="color: red"><?= $_GET['emailErr']?></p>
            <?php endif ?>
            </div>
            <div class="form-group">
            <label class="form-label">Password</label> 
            <input class="form-control" type="password" name="password">
            <?php if(isset($_GET['passwordErr'])): ?>
                <p class="error-massage" style="color: red"><?= $_GET['passwordErr']?></p>
            <?php endif ?>
            <?php if(isset($_GET['msg'])): ?>
                <p class="error-massage" style="color: red"><?= $_GET['msg']?></p>
            <?php endif ?>
            </div>
            <div>
                <button type="submit" class="form-submit">Đăng nhập</button>
            </div>
        </form>
    </div>
</body>
</html>