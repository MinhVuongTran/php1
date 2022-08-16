<?php
    require_once "./common.php";
    
    $book_title = $_POST['book_title'];
    $file = $_FILES['image'];
    $image = "./uploads/" . $file['name'];
    move_uploaded_file($file['tmp_name'], $image);
    $intro = $_POST['intro'];
    $detail = $_POST['detail'];
    $page = $_POST['page'];
    $price = $_POST['price'];
    $cate_id = $_POST['cate_id'];

    $insertQuery = "insert into books (book_title, image, intro, detail, page, price, cate_id) 
                    values ('$book_title', '$image', '$intro', '$detail', '$page', '$price', '$cate_id')";
    
    executeQuery($insertQuery);
    header("location: index.php");
?>