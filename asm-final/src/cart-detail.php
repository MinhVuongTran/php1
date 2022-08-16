<?php
    require_once "../common/common.php";
    checkLogIn();

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }

    $cart = $_SESSION['cart'];
    $totalPrice = 0;
?>


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
    <div class='container'>
        <table class="table" border="1">
            <thead>
                <td>Id</td>
                <td>Name</td>
                <td>Sku</td>
                <td>Image</td>
                <td>price</td>
                <td>quantity</td> 
                <td>detail</td>   
                <td></td>
            </thead>
            <tbody>
                <?php foreach ($cart as $key => $item): ?>
                    <?php 
                        $totalPrice += $item['quantity'] * $item['price']
                    ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['sku'] ?></td>
                        <td><img class="image" src="<?= $item['image'] ?>"/></td>
                        <td><?= $item['price'] ?></td>
                        <td><?= $item['quantity'] ?></td>
                        <td><?= $item['detail'] ?></td>
                        <td>
                            <a href="remove-cart.php?id=<?= $item['id'] ?>" style="text-decoration: none; color: red;font-weight: 600">XÓA</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                <tr>
                    <td colspan="6">Tổng Tiền</td>
                    <td colspan="2"><?= $totalPrice ?></td>
                </tr>
            </tbody>
        </table>

        <div class="actions">
            <a class="action-link"href="render.php">Tiếp tục mua hàng</a>
            <a class="action-link"href="remove-cart.php">Xóa toàn bộ giỏ hàng</a>
        </div>
    </div>
</body>
</html>
