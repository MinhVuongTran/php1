<?php
   $string = '   Hello world   ';
   $arr = ['xin chao', 'tam biet', 'cam on'];
   htm

   echo "sha1: " . sha1($string) . "<br>"; //
   echo "string length:" . strlen($string) . "<br>"; // trả về độ dài chuỗi
   echo "explode:" . explode(" ", $string) . "<br>"; // trả về 1 mảng từ chuỗi
   echo "implode: " . implode("/", $arr) . "<br>"; // trả về 1 chuỗi từ 1 phần tử của mảng
   echo "trim: " . trim($string) . "<br>"; // loại bỏ khoảng trắng của 2 bên chuỗi
   echo "ltrim: " . ltrim($string) . "<br>"; // loại bỏ khoảng trắng bên trái 
   rtrim(); // loại bỏ khoảng trắng bên phải
   ucwords(); // chuyển đổi ký tự đầu tiên của mỗi từ trong chuỗi thành chữ hoa
   strtoupper(); // chuyển thành chữ hoa
   strtolower(); // chuyển thành chữ thường
   str_replace(); // thay thế ký tự trong 1 chuỗi
   str_split(); //tách chuỗi thành mảng

?>