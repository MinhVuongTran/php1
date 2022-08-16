<?php
    require_once "./common.php";
    $id = $_GET['id'];
    $query = "select * from projects where id = $id";
    $project = getAllValue($query, false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save-edit-projects.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="hidden" name="id" value="<?=$id?>">
        </div>
        <div>
            <label for="">name</label>
            <input type="text" name="name" value="<?=$project['name']?>">
        </div>
        <div>
            <label for="">code</label>
            <input type="text" name="code" value="<?= $project['code']?>">
        </div>
        <div>
            <label for="">start_date</label>
            <input type="date" name="start_date" value="<?= $project['start_date']?>">
        </div>
        <div>
            <label for="">end_date</label>
            <input type="date" name="end_date" value="<?= $project['end_date']?>">
        </div>
        <div>
            <label for="">budget</label>
            <input type="text" name="budget" value="<?= $project['budget']?>">
        </div>
        <div>
            <label for="">created_at</label>
            <input type="datetime-local" name="created_at" value="<?= $project['created_at']?>">
        </div>
        <div>
            <label for="">updated_at</label>
            <input type="datetime-local" name="updated_at" value="<?= $project['updated_at']?>">
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>