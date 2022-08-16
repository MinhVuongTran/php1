<?php
    require_once "../common/common.php";
    checkLogIn();
    $categoriesData = getAllValue("categories");
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
    <div class="main">
        <form class="form" action="save-add-product.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id">
            </div>
            <div class="form-group">
                <label class="form-label">Name</label> 
                <input class="form-control" type="text" name="name">
                <?php if(isset($_GET['nameErr'])): ?>
                <p class="error-massage" style="color: red"><?= $_GET['nameErr']?></p>
            <?php endif ?>
            </div>
            <div class="form-group">
                <label class="form-label">Sku</label> 
                <input class="form-control" type="text" name="sku">
                <?php if(isset($_GET['skuErr'])): ?>
                    <p class="error-massage" style="color: red"><?= $_GET['skuErr']?></p>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label class="form-label">Image</label> 
                <input class="form-control" type="file" name="image">
            </div>
            <div class="form-group">
                <label class="form-label">Price</label> 
                <input class="form-control" type="number" name="price">
                <?php if(isset($_GET['priceErr'])): ?>
                    <p class="error-massage" style="color: red"><?= $_GET['priceErr']?></p>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label class="form-label">Quantity</label> 
                <input class="form-control" type="number" name="quantity">
                <?php if(isset($_GET['quantityErr'])): ?>
                    <p class="error-massage" style="color: red"><?= $_GET['quantityErr']?></p>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label class="form-label">Category</label> 
                <select class="form-control" name="category_id" id="">
                    <?php foreach ($categoriesData as $item): ?>
                        <option value="<?= $item['id']?>">
                            <?= $item['name']?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Detail</label> 
                <input class="form-control" type="text" name="detail">
            </div>
            <div>
                <button type="submit" class="form-submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>