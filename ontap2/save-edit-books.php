<?php
    require_once "./common.php";

    $id = $_POST['book_id'];
    $book_title = $_POST['book_title'];
    $file = $_FILES['image'];
    if($file['name'] === "") {
        $query = "select * from books where id = $id";
        $data = getValue($query, false);
        $image = $data['image'];
    } else {
        $image = "./uploads/" . $file['name']
        move_uploaded_file($file['tmp_name'], $image);
    }
    $intro = $_POST['intro'];
    $detail = $_POST['detail'];
    $page = $_POST['page'];
    $price = $_POST['price'];

    $update = "update books set book_title = '$book_title', image = '$image', intro = '$intro', detail = '$detail', page = '$page', price = '$price' where book_id = $id";

    executeQuery($update);
    header("location: index.php");
?>