<?php

    function executeQuery($query) {
        $connect = new PDO("mysql:host=127.0.0.1;dbname=ontap2;charset=utf8", "root", "");
        $stmt = $connect -> prepare($query);
        $stmt -> execute();
    }

    function getValue($query, $fetchALl = true) {
        $connect = new PDO("mysql:host=127.0.0.1;dbname=ontap2;charset=utf8", "root", "");

        $stmt = $connect -> prepare($query);
        $stmt -> execute();
        
        if($fetchALl) {
            return $data = $stmt -> fetchAll();
        } else {
            return $data = $stmt -> fetch();
        }
    }

    
?>