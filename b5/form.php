<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="submit-form.php" method=""get>
        <label>Name</label>
        <input type="text" name = "name">
        <fieldset>
            <label for="">Sở thích</label>
            <input type="checkbox" name="so_thich[]" value="1"> Đá bóng
            <input type="checkbox" name="so_thich[]" value="2"> Đi bơi
            <input type="checkbox" name="so_thich[]" value="3"> Xem phim
            <input type="checkbox" name="so_thich[]" value="4"> Đọc sách
        </fieldset>
        <select name="country[]" id="" multiple>
            <option value="1">Mỹ</option>
            <option value="2">Canada</option>
            <option value="84">Việt Nam</option>
            <option value="25">Trung Quốc</option>
        </select>
        <button type="submit">Lưu</button>
    </form>
</body>
</html>