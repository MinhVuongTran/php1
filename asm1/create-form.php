<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="get">
        <div>
            MSSV: <input type="text" name="mssv">
        </div>
        <div>
            Họ và tên: <input type="text" name="name">
        </div>
        <div>
            Năm sinh: <input type="number" name="year">
        </div>
        <div>
            Giới tính: <select name="gender" >
                <option value="1">Nam</option>
                <option value="2">Nữ</option>
            </select>
        </div>
        <div>
            Lớp: <input type="text" name="class">
        </div>
        <div>
            <button type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>