<?php
    require_once "./common.php";
    $getBooks = "select b.*, c.`cate_name` from books b inner join categories c on b.cate_id = c.cate_id";
    $books = getValue($getBooks);
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
        <table border="1">
            <thead>
                <th>book_id</th>
                <th>book_title</th>
                <th>image</th>
                <th>intro</th>
                <th>detail</th>
                <th>page</th>
                <th>price</th>
                <th>cate_name</th>
                <th>
                    <a href="add-books.php">ADD</a>
                </th>
            </thead>

            <tbody>
                <?php foreach($books as $book) : ?>
                    <tr>
                        <td><?= $book['book_id']?></td>
                        <td><?= $book['book_title']?></td>
                        <td>
                            <img src="<?=$book['image']?>" alt="" style="width: 80px; height: 80px; object-fit:cover">
                        </td>
                        <td><?= $book['intro']?></td>
                        <td><?= $book['detail']?></td>
                        <td><?= $book['page']?></td>
                        <td><?= $book['price']?></td>
                        <td><?= $book['cate_name']?></td>
                        <td>
                            <a href="edit-books.php?id=<?=$book['book_id']?>">edit</a>
                        </td>
                        <td>
                            <a href="remove-books.php?id=<?=$book['book_id']?>">remove</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <table border="1">
            <thead>
                <th>cate_id</th>
                <th>cate_name</th>
                <th>
                    <a href="add-categories.php">ADD</a>
                </th>
            </thead>

            <tbody>
                <?php foreach($categories as $category) : ?>
                    <tr>
                        <td><?= $category['cate_id']?></td>
                        <td><?= $category['cate_name']?></td>
                        <td>
                            <a href="edit-categories.php?id=<?=$category['cate_id']?>">edit</a>
                        </td>
                        <td>
                            <a href="remove-categories.php?id=<?=$category['cate_id']?>">remove</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>