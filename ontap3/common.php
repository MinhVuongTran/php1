<?php

    function execQuery($query) {
        $connect = new PDO("mysql:host=127.0.0.1;dbname=ontap3;charset=utf8", "root", "");

        $stmt = $connect -> prepare($query);
        $stmt -> execute();
    }

    function getValue($query, $fetchAll = true) {
        $connect = new PDO("mysql:host=127.0.0.1;dbname=ontap3;charset=utf8", "root", "");
        $stmt = $connect -> prepare($query);
        $stmt -> execute();
        if($fetchAll) {
            return $data = $stmt -> fetchAll();
        } else {
            return $data = $stmt -> fetch();
        }
    }

    function delete($table, $id) {
        $delete = "delete from $table where id = $id";
        execQuery($delete);
    }

?>