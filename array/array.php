<?php
    // Mảng là kiểu dữ liệu giúp chứa tập hợp các giá trị
    // (Phần tử), mỗi phần tử trong mảng được xác định = tổ hợp key => value
    // Các phần tử trong mảng không nhất thiết phải cùng kiểu dữ liệu
    $arr = [
        "name" => "Trần Minh Vương",
        "age" => 18,
        "is_married" => false,
        "parents" => [
            "Long",
            "Hương"
        ]
    ];

    foreach($arr as $a) {
        // var_dump($key);
        var_dump($a);
        echo "<br>";
    };
?>