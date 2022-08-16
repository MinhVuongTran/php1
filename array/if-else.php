<?php
    $arr = [1, 3, 5, 6, 7, 10, 17, 21, 12, 9, 4];
    $count = 0;

    foreach($arr as $value) {
        if ($value % 3 == 0) {
            $count++;
        }
    };
 
    for($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }

    echo "Số lượng các số chia hết cho 3 là: " . $count;
    echo "<br>";
    echo "Số nhỏ nhất là: " . $arr[0];
    echo "<br>";
    echo "Số lớn nhất là: " . $arr[count($arr) - 1];
?>