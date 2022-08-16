<?php

$students = [
    [
        "id" => "PH26824",
        "name" => "Tran minh vuong",
        "age" => 18,
        "gender" => 1,
        "major" => 1
    ],
    [
        "id" => "PH26607",
        "name" => "Nguyen Manh Tam",
        "age" => 18,
        "gender" => 1,
        "major" => 2
    ],
    [
        "id" => "PH27124",
        "name" => "Nguoi yeu toi",
        "age" => 18,
        "gender" => 2,
        "major" => 4
    ],
    [
        "id" => "PH28310",
        "name" => "Khong biet ten",
        "age" => 19,
        "gender" => 1,
        "major" => 3
    ],
];

// 1.Hiện thị danh sách các sinh viên ra thành table như ví dụ
// 2. Chuyển giới tính và chuyên ngành từ số thành text

?>

<table border="1"
    style="
        width: 500px;
        height: 200px;
        margin: 150px auto 0;
        text-align: center;
        ">
    <?php for ($i = 0; $i < count($students); $i++) { ?>
        <tr>
            <td><?php echo $students[$i]["id"]?></td>
            <td><?php echo $students[$i]["name"]?></td>
            <td><?php 
                switch($students[$i]["gender"]) {
                    case 1: 
                        echo $convertGender= "Nam";
                        break;
                    case 2: 
                        echo $convertGender = "Nữ";
                        break;
                }
                ?>
            </td>
            <td><?php switch($students[$i]["major"]) {
                        case 1: 
                            echo $convertMajor = "Thiết kế web";
                            break;
                        case 2: 
                            echo $convertMajor = "Ứng dụng phần mềm";
                            break;
                        case 3: 
                            echo $convertMajor = "Thiết kế đồ họa";
                            break;
                        case 4: 
                            echo$convertMajor = "Marketing";

                }
                ?>
            </td>
        </tr>
    <?php } ?>
</table>