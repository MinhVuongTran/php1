<?php
    require_once "../common/common.php";
    $id = $_GET['id'];

    checkLogIn();

    $selectQuery = "select * from categories where id = $id";
    
    $select = $connect -> prepare($selectQuery);
    $select -> execute();
    
    $item = $select -> fetch();
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
        <form class="form" action="save-edit-category.php" method="post">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $item['id'] ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Name</label> 
                <input class="form-control" type="text" name="name" value="<?= $item['name']?>">
                <?php if(isset($_GET['nameErr'])): ?>
                    <p class="error-massage" style="color: red"><?= $_GET['skuErr']?></p>
                <?php endif ?>
            </div>
            <div>
                <button type="submit" class="form-submit">Save</button>
            </div> 
        </form>
    </div>
</body>
</html>
