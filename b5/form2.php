<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload-file.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Họ và tên</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Ảnh</label>
            <input type="file" name="avatar">
        </div>
        <button type="submit">Lưu</button>
    </form>    
</body>
</html>