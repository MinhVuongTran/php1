<?php
    require_once "./common.php";
    $id = $_GET['id'];
    $getCategory = "select * from categories where cate_id = $id";
    $category = getValue($getCategory, false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="save-edit-categories.php" method="post">
            <div>
                <input type="hidden" name="cate_id" value="<?=$category['cate_id']?>">
            </div>
            <div>
                <label for="">cate_name</label>
                <input type="text" name="cate_name" value="<?=$category['cate_name']?>">
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>