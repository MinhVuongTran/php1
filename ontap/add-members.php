<?php
    require_once './common.php';
    $getProjectsQuery = "select * from projects";
    $getProjects = getAllValue($getProjectsQuery);
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
    <form action="save-add-members.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">is_leader</label>
            <input type="text" name="is_leader">
        </div>
        <div>
            <label for="">project_name</label>
            <select name="project_id" id="">
                <?php foreach($getProjects as $project) : ?>
                    <option value="<?=$project['id']?>">
                        <?= $project['name']?>
                    </option>

                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="">avatar</label>
            <input type="file" name="avatar">
        </div>
        <div>
            <label for="">department</label>
            <input type="text" name="department">
        </div>
        <div>
            <label for="">salary</label>
            <input type="number" name="salary">
        </div>
        <div>
            <label for="">phone</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label for="">created_at</label>
            <input type="datetime-local" name="created_at">
        </div>
        <div>
            <label for="">updated_at</label>
            <input type="datetime-local" name="updated_at">
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
</body>
</html>