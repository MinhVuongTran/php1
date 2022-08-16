<?php
    function executeQuery($query) {
        $connect = new PDO("mysql:host=127.0.0.1;dbname=php1_thi;charset=utf8", "root", "");

        $stmt = $connect -> prepare($query);
        $stmt -> execute();
    }

    function getAllValue($query, $fetchAll = true) {
        $connect = new PDO("mysql:host=127.0.0.1;dbname=php1_thi;charset=utf8", "root", "");

        $stmt = $connect -> prepare($query);
        $stmt -> execute();
        
        if($fetchAll) {
            return $data = $stmt -> fetchAll();
        } else {
            return $data = $stmt -> fetch();
        }
    }
    
    function deleteValue($table, $id) {
        $query = "delete from $table where id = $id";
        executeQuery($query);
    }
?>