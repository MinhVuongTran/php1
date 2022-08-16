<?php
    $my_laptop = [
        "hang_san_xuat" => "ASUS",
        "dong_may" => "ASUS A556U",
        "ram" => 8,
        "o_cung" => 256,
        "cpu" => "Intel(R) Core(TM) i5-7200U",
        "gia_tien" => 15000000,
    ];

    $my_laptop["nam_san_xuat"] = 2017;
    $my_laptop["o_cung"] = 500;
    unset($my_laptop["dong_may"]);

    foreach($my_laptop as $key => $value) {
        var_dump($key);
        var_dump($value);
        echo "<br>";
    }

?>