<?php
    require_once "../common/common.php"; 
    checkLogIn();
    $categoriesData = getAllValue("categories");
    $productsData = getCategories();

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
    
    $cart = $_SESSION['cart'];
    
    for ($i=0; $i < count($productsData); $i++) { 
        for ($j=0; $j < count($cart); $j++) { 
            if($productsData[$i]['id'] == $cart[$j]['id']) {
                $productsData[$i]['quantity'] -= $cart[$j]['quantity'];
                break;
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
    <link rel="stylesheet" href="../common/index.css">
    <title>Document</title>
</head>
<body>
    <div class='container'>
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
                <td>id</td>
                <td>name</td>
                <td>sku</td>
                <td>image</td>
                <td>price</td>
                <td>quantity</td>
                <td>category_name</td>   
                <td>detail</td>   
                <td class="cart">
                    <a class="cart-link"href="cart-detail.php">Giỏ hàng</a>
                </td>
            </thead>
            <tbody>
                <?php foreach ($productsData as $data): ?>
                    <tr>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['name'] ?></td>
                        <td><?= $data['sku'] ?></td>
                        <td><img class="image" src="<?= $data['image'] ?>"/></td>
                        <td><?= $data['price'] ?></td>
                        <td><?= $data['quantity'] ?></td>
                        <td><?= $data['category_name'] ?></td>
                        <td><?= $data['detail'] ?></td>
                        <td>
                            <a href="add-to-cart.php?id=<?= $data['id'] ?>" 
                               style="text-decoration: none;color: red;font-weight: 600;
                                "
                                class="<?= $data['quantity'] <= 0 ? "dis" : ""?>">
                                <?= $data['quantity'] <= 0 ? "HẾT HÀNG" : "THÊM VÀO GIỎ HÀNG"?>
                            </a>
                        </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>
