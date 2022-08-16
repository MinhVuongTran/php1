<?php
    require_once "./common.php";
    $id = $_GET['id'];
    $getMember = "select * from members where id = $id";
    $member = getValue($getMember, false);

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
        <form action="save-edit-members.php" method="post" enctype="multipart/form-data">
            <div>
                <input type="hidden" name="id" value="<?=$member['id']?>">
            </div>
            <div>
                <label for="">name</label>
                <input type="text" name="name" value="<?=$member['name']?>">
                <?php if(isset($_GET['nameErr'])) : ?>
                    <p style="color: red"><?=$_GET['nameErr']?></p>
                <?php endif ?>
            </div>
            <div>
                <label for="">is_leader</label>
                <input type="text" name="is_leader" value="<?=$member['is_leader']?>">
                <?php if(isset($_GET['is_leader_err'])) : ?>
                    <p style="color: red"><?=$_GET['is_leader_err']?></p>
                <?php endif ?>
            </div>
            <div>
                <label for="">project_name</label>
                <select name="project_id" id="">
                    <?php foreach($projects as $project) : ?>
                        <option value="<?=$project['id']?>" <?= $project['id'] == $member['project_id'] ? "selected=selected" : ""?>
                        >
                            <?=$project['name']?>
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
                <input type="text" name="department" value="<?=$member['department']?>">
                <?php if(isset($_GET['departmentErr'])) : ?>
                    <p style="color: red"><?=$_GET['departmentErr']?></p>
                <?php endif ?>
            </div>
            <div>
                <label for="">salary</label>
                <input type="number" name="salary" value="<?=$member['salary']?>"> 
                <?php if(isset($_GET['salaryErr'])) : ?>
                    <p style="color: red"><?=$_GET['salaryErr']?></p>
                <?php endif ?>
            </div>
            <div>
                <label for="">phone</label>
                <input type="text" name="phone" value="<?=$member['phone']?>">
                <?php if(isset($_GET['phoneErr'])) : ?>
                    <p style="color: red"><?=$_GET['phoneErr']?></p>
                <?php endif ?>
            </div>
            <div>
                <label for="">created_at</label>
                <input type="datetime-local" name="created_at" value="<?=$member['created_at']?>">
            </div>
            <div>
                <label for="">updated_at</label>
                <input type="datetime-local" name="updated_at" value="<?=$member['updated_at']?>"> 
            </div>
            <button type="submit">save</button>
        </form>
    </div>
</body>
</html>