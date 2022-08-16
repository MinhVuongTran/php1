<?php
    require_once "../common/common.php";
    checkLogIn();
    $usersData = getAllValue("users");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../common/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="image">
                <img src="<?= $_SESSION['auth']['avatar']?>" alt="">
            </div>
            <p class="profile">
                <?=$_SESSION['auth']['name']?>
            </p>
            <div class="logout">
                <a class="logout-link" href="logout.php">Đăng xuất</a>
            </div>
        </header>
        <table class="table" border="1">
            <thead>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Avatar</td>
                <td colspan="2">
                    <a href="add-form.php" 
                       style="text-decoration: none; color: red;font-weight: 600">Add</a>
                </td>
            </thead>
            <tbody>
            <?php foreach ($usersData as $item): ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['email'] ?></td>
                    <td><img class="image" src ="<?= $item['avatar'] ?>"/></td>
                    <td>
                        <a href="edit-form.php?id=<?= $item['id'] ?>" style="text-decoration: none; color: red;font-weight: 600">SỬA</a>
                    </td>
                    <td>
                        <a href="delete.php?id=<?= $item['id'] ?>" style="text-decoration: none; color: red;font-weight: 600">XÓA</a>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>

