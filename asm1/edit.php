<?php
    require_once 'db.php';
    $list = getList();
    $mssv = $_GET['mssv'];
    $item = [];
    foreach($list as $value){
        if($value[0] == $mssv){
            $item = $value;
            break;
        }
    }
    ?>
    <form action="save-edit.php">
        <div>
            <input type="hidden" name="mssv" value="<?= $item[0] ?>">
        </div>
        <div>
            Họ và tên: <input type="text" name="name" value="<?= $item[1] ?>">
        </div>
        <div>
            Năm sinh: <input type="number" name="year" value="<?= $item[2] ?>">
        </div>
        <div>
            Giới tính: <select name="gender">
                <option value="1" <?= $item[3] == 1 ? 'selected="selected"' : ''?>>Nam</option>
                <option value="2" <?= $item[3] == 2 ? 'selected="selected"' : ''?>>Nữ</option>
            </select>
        </div>
        <div>
            Lớp: <input type="text" name="class" value="<?= $item[4] ?>">
        </div>
        <div>
            <button type="submit">Lưu</button>
        </div>
    </form> 