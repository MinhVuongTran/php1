<?php
    require_once "./common.php";
    $id = $_GET['id'];

    $getBook = "select * from books where book_id = $id";
    $book = getValue($getBook, false);
    $getCategories = "select * from categories";
    $categories = getValue($getCategories);
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
    <form action="save-add-books.php" method="post" enctype="multipart/form-data">
            <div>
                <input type="hidden" name="book_id" value="<?=$id?>">
            </div>
            <div>
                <label for="">book_title</label>
                <input type="text" name="book_title" value="<?=$book['book_title']?>">
            </div>
            <div>
                <label for="">image</label>
                <input type="file" name="image">
            </div>
            <div>
                <label for="">intro</label>
                <input type="text" name="intro" value="<?=$book['intro']?>">
            </div>
            <div>
                <label for="">detail</label>
                <input type="text" name="detail" value="<?=$book['detail']?>">
            </div>
            <div>
                <label for="">page</label>
                <input type="number" name="page" value="<?=$book['page']?>">
            </div>
            <div>
                <label for="">price</label>
                <input type="number" name="price" value="<?=$book['price']?>">
            </div>
            <div>
                <label for="">cate_name</label>
                <select name="cate_id" >
                    <?php foreach($categories as $category) : ?>
                        <option value="<?=$category['cate_id']?>" 
                        <?=$book['cate_id'] == $category['cate_id'] ? "selected=selected" : ""?>
                    >
                            <?=$category['cate_name']?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>