<?php
    require_once "./common.php";
    $id = $_GET['id'];
    $query = "select * from members where id = $id";
    $member = getAllValue($query, false);
    $query2 = "select * from projects";
    $projects = getAllValue($query2);
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
    <form action="save-edit-members.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="hidden" name="id" value="<?=$id?>">
        </div>
        <div>
            <label for="">name</label>
            <input type="text" name="name" value="<?=$member['name']?>">
        </div>
        <div>
            <label for="">is_leader</label>
            <input type="text" name="is_leader" value="<?= $member['is_leader']?>">
        </div>
        <div>
            <label for="">project_name</label>
            <select name="project_id" id="">
                <?php foreach($projects as $project) : ?>
                    <option value="<?=$project['id']?>" <?= $project['id'] == $member['project_id'] ? "selected = selected" : ""?>>
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
            <input type="text" name="department" value="<?= $member['department']?>">
        </div>
        <div>
            <label for="">salary</label>
            <input type="number" name="salary" value="<?= $member['salary']?>">
        </div>
        <div>
            <label for="">phone</label>
            <input type="text" name="phone" value="<?= $member['phone']?>">
        </div>
        <div>
            <label for="">created_at</label>
            <input type="datetime-local" name="created_at" value="<?= $member['created_at']?>">
        </div>
        <div>
            <label for="">updated_at</label>
            <input type="datetime-local" name="updated_at" value="<?= $member['updated_at']?>">
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>