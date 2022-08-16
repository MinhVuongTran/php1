<?php
    require_once "./common.php";
    $getProjects = "select * from projects";
    $projects = getValue($getProjects);
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
    <div>
        <form action="save-add-projects.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="">name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="">code</label>
                <input type="text" name="code">
            </div>
            <div>
                <label for="">start_date</label>
                <input type="date" name="start_date">
            </div>
            <div>
                <label for="">end_date</label>
                <input type="date" name="end_date">
            </div>
            <div>
                <label for="">budget</label>
                <input type="number" name="budget">
            </div>
            <div>
                <label for="">created_at</label>
                <input type="datetime-local" name="created_at">
            </div>
            <div>
                <label for="">updated_at</label>
                <input type="datetime-local" name="updated_at">
            </div>
            <button type="submit">save</button>
        </form>
    </div>
</body>
</html>