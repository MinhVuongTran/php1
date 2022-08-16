<?php
    require_once "db.php";

    $list = getList();

    for($i = 0; $i < count($list); $i++) {
        $list[$i][2] = date("Y") - $list[$i][2];
        $list[$i][3] = $list[$i][3] == "1" ? "Nam" : "Nữ";
    }
?>

<table border="1" 
    style="
        width: 500px;
        height: 200px;
        margin: 150px auto 0;
        text-align: center;
        ">
    <thead>
        <td>Mã sinh viên</td>
        <td>Họ tên</td>
        <td>Tuổi</td>
        <td>Giới tính</td>
        <td>Lớp</td>
        <th colspan="2">
            <a href="create-form.php" style="text-decoration: none; color: red">ADD</a>
        </th>
    </thead>
    <tbody>
        <?php foreach ($list as $item): ?>
            <tr>
                <td><?= $item[0] ?></td>
                <td><?= $item[1] ?></td>
                <td><?= $item[2] ?></td>
                <td><?= $item[3] ?></td>
                <td><?= $item[4] ?></td>
                <td>
                    <a href="edit.php?mssv=<?= $item[0] ?>" style="text-decoration: none; color: red; font-weight: 600">SỬA</a>
                </td>
                <td>
                    <a href="remove.php?mssv=<?= $item[0] ?>" style="text-decoration: none; color: red;font-weight: 600">XÓA</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>