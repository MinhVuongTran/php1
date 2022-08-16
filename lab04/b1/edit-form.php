<?php
    $connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");
    
    $id = $_REQUEST['id'];
    $selectQuery = "select * from users where id = $id";
    
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
        <form class="form" action="edit.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $item['id'] ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Name</label> 
                <input class="form-control" type="text" name="name" value="<?= $item['name']?>">
            </div>
            <div class="form-group">
                <label class="form-label">Email</label> 
                <input class="form-control" type="text" name="email" value="<?= $item['email']?>" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Avatar</label> 
                <input class="form-control" type="file" name="avatar">
            </div>
            <div>
                <button type="submit" class="form-submit">Save</button>
            </div>
        </form>
    </div>
</body>
</html>
