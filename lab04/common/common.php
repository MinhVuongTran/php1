<?php
    $connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", "root", "");

    function getAllValue($table) {
        $getAllValueQuery = "select * from $table";
        
        $getAllValue = $GLOBALS['connect'] -> prepare($getAllValueQuery);

        $getAllValue -> execute();
        $data = $getAllValue -> fetchAll(); 
        return $data;
    }

    function getCategories() {
        $getCategoriesQuery = "select p.*, c.`name` as category_name
                               from products p inner join categories c 
                               on p.category_id = c.id";
        $getCategories = $GLOBALS['connect'] -> prepare($getCategoriesQuery);
        $getCategories -> execute();
        $data = $getCategories -> fetchAll();
        return $data;
    }

    function updateId($table) {
        $updateIdQuery = "set @autoId := 0;
        update $table set id = @autoId := (@autoId + 1)";
        
        $updateId = $GLOBALS['connect'] -> prepare($updateIdQuery);
        $updateId -> execute();
    }

    function deleteById($tableName, $id) {

        $DeleteByIdQuery = "delete from $tableName where id = $id";
                      
        $DeleteById = $GLOBALS['connect'] -> prepare($DeleteByIdQuery);
    
        $DeleteById -> execute();
    }

    function insertValue($tableName, array $columnArr, array $valueArr) {
        $columns = join(",", $columnArr);
        
        $newValueArr = [];

        foreach($valueArr as $value) {
            $newValueArr[] = "'$value'";
        }

        $values = join(",", $newValueArr);

        $insertQuery = "insert into $tableName 
                            ($columns) 
                        values 
                            ($values)";
    
        $insert = $GLOBALS['connect'] -> prepare($insertQuery);
        $insert -> execute();   
    }

    function updateValue($id, $tableName, array $columnArr, array $valueArr) {
        $newValueArr = [];
        $arr = [];

        foreach($valueArr as $value) {
            $newValueArr[] = "'$value'";
        }

        $values = join(",", $newValueArr);

        for($i = 0; $i < count($columnArr); $i++) {
            $temp = "$columnArr[$i] = $newValueArr[$i]"; // $temp = "name = '$name'"
            $arr[] = $temp;
        }
        $columnsAndValues = join(",", $arr);
        
        $updateQuery = "update $tableName 
                        set $columnsAndValues
                        where id = $id";

        $update = $GLOBALS['connect'] -> prepare($updateQuery);
        $update -> execute();
    }

    function uploadFile($id, $table, $file) {
        if($file['size'] === 0) {
            if($id === '') {
                $fileSrc = "../uploads/no-image.jpg";
                move_uploaded_file($file['tmp_name'], $fileSrc);
                return $fileSrc;
            } else {
                if($table === "users") {
                    $query = "select avatar from $table where id = $id";
                    $getAvatar = $GLOBALS['connect'] -> prepare($query);
                    $getAvatar -> execute();
                    $data = $getAvatar -> fetch();
                    $fileSrc = $data['avatar'];
                } else {
                    $query = "select image from $table where id = $id";
                    $getImage = $GLOBALS['connect'] -> prepare($query);
                    $getImage -> execute();
                    $data = $getImage -> fetch();
                    $fileSrc = $data['image'];
                }
            }
            return $fileSrc;
        } else {
            $fileSrc = "../uploads/". $file['name'];
            move_uploaded_file($file['tmp_name'], $fileSrc);
            return $fileSrc;
        }
    }

    function checkLogIn() {
        session_start();
        if(!$_SESSION['auth'] || empty($_SESSION['auth'])) {
            header("location: login.php");
            die;
        } 
    }

    // Check email or password
    function checkEmailAndPassword($email, $password) {
        $emailErr = "";
        $passwordErr = "";

        if(strlen($password) == 0){
            $passwordErr = "Hãy nhập mật khẩu";
        }

        if(strlen($email) == 0){
            $emailErr = "Hãy nhập email";
        }

        if(!empty($emailErr) || !empty($passwordErr)){
            header("location: login.php?emailErr=$emailErr&passwordErr=$passwordErr");
            die;
        }

        $sqlQuery = "select * from users where email = '$email'";
        $stmt = $GLOBALS['connect'] -> prepare($sqlQuery);
        $stmt -> execute();
        $user = $stmt -> fetch();

        if($user && password_verify($password, $user['password'])) {
            unset($user['password']);
            $_SESSION['auth'] = $user;
            header("location: render.php");
            die;
        }

        header("location: login.php?msg='Tài khoản hoặc mật khẩu không chính xác'");
    }
    
    function checkAddSkuProduct($sku) {
        $sqlQuery = "select count(*) as total from products where sku = '$sku'";
        $stmt = $GLOBALS['connect'] -> prepare($sqlQuery);
        $stmt -> execute();
        $count = $stmt -> fetch();
        return $count;
    }

    function checkEditSkuProduct($sku, $id) {
        $sqlQuery = "select count(*) as total from products where sku = '$sku' and id != $id";
        $stmt = $GLOBALS['connect'] -> prepare($sqlQuery);
        $stmt -> execute();
        $count = $stmt -> fetch();
        return $count;
    }

    function checkAddProduct($name, $sku, $price, $quantity) {
        $nameErr = "";
        $skuErr = "";
        $priceErr = "";
        $quantityErr = "";

        if(strlen($name) == 0) {
            $nameErr = "Nhập tên";
        }

        if(strlen($sku) == 0) {
            $skuErr = "Nhập sku";
        }

        if(strlen($price) == 0) {
            $priceErr = "Nhập giá";
        } else if($price <= 0){
            $priceErr = "Nhập giá lớn hơn 0";
        }

        if(strlen($quantity) == 0) {
            $quantityErr = "Nhập số lượng";
        } else if($price <= 0){
            $quantityErr = "Nhập số lượng lớn hơn 0";
        }

        if(!empty($nameErr) || !empty($skuErr) || !empty($priceErr) || !empty($quantityErr)){
            header("location: add-product.php?nameErr=$nameErr&skuErr=$skuErr&priceErr=$priceErr&quantityErr=$quantityErr");
            die;
        }
    }

    function checkEditProduct($id, $name, $sku, $price, $quantity) {
        $nameErr = "";
        $skuErr = "";
        $priceErr = "";
        $quantityErr = "";

        if(strlen($name) == 0) {
            $nameErr = "Nhập tên";
        }

        if(strlen($sku) == 0) {
            $skuErr = "Nhập sku";
        }

        if(strlen($price) == 0) {
            $priceErr = "Nhập giá";
        } else if($price <= 0){
            $priceErr = "Nhập giá lớn hơn 0";
        }

        if(strlen($quantity) == 0) {
            $quantityErr = "Nhập số lượng";
        } else if($price <= 0){
            $quantityErr = "Nhập số lượng lớn hơn 0";
        }

        if(!empty($nameErr) || !empty($skuErr) || !empty($priceErr) || !empty($quantityErr)){
            header("location: edit-product.php?id=$id&nameErr=$nameErr&skuErr=$skuErr&priceErr=$priceErr&quantityErr=$quantityErr");
            die;
        }
    }

    function checkCategories($name, $id = '') {
        $nameErr = "";

        if(strlen($name) == 0){
            $nameErr = "Hãy nhập tên";
        }

        $data = getAllValue("categories");

        foreach ($data as $value) {
            if($name == $value['name']) {
                $nameErr = "Đã tồn tại tên";
            }
        }

        if(!empty($nameErr)){
            header("location: add-category.php?id=$id&nameErr=$nameErr");
        die;
        }
    }

    function checkEditCategories() {

    }

?>