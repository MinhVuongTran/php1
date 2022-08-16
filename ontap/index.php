<?php
    require_once './common.php';

    $getMembersQuery = "select m.*, p.`name` as project_name from members m inner join projects p on m.project_id = p.id";
    $getProjectsQuery = "select * from projects";
    $getMembers = getAllValue($getMembersQuery);
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
    <table border="1">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>is_leader</th>
            <th>project_name</th>
            <th>avatar</th>
            <th>department</th>
            <th>salary</th>
            <th>phone</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th><a href="add-members.php">ADD</a></th>
        </thead>
        <tbody>
            <?php foreach($getMembers as $member) : ?>
                <tr>
                    <td><?= $member['id'] ?></td>
                    <td><?= $member['name'] ?></td>
                    <td><?= $member['is_leader'] ?></td>
                    <td><?= $member['project_name'] ?></td>
                    <td>
                        <img style="width: 80px; height: 80px; object-fit:cover" src="<?= $member['avatar'] ?>" alt="">
                    </td>
                    <td><?= $member['department'] ?></td>
                    <td><?= $member['salary'] ?></td>
                    <td><?= $member['phone'] ?></td>
                    <td><?= $member['created_at'] ?></td>
                    <td><?= $member['updated_at'] ?></td>
                    <td><a href="edit-members.php?id=<?=$member['id']?>">EDIT</a></td>
                    <td><a href="remove-members.php?id=<?=$member['id']?>">REMOVE</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <table border="1">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>code</th>
            <th>start_date</th>
            <th>end_date</th>
            <th>budget</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th><a href="add-projects.php">ADD</a></th>
        </thead>
        <tbody>
            <?php foreach($getProjects as $project) : ?>
                <tr>
                    <td><?= $project['id'] ?></td>
                    <td><?= $project['name'] ?></td>
                    <td><?= $project['code'] ?></td>
                    <td><?= $project['start_date'] ?></td>
                    <td><?= $project['end_date'] ?></td>
                    <td><?= $project['budget'] ?></td>
                    <td><?= $project['created_at'] ?></td>
                    <td><?= $project['updated_at'] ?></td>
                    <td><a href="edit-projects.php?id=<?=$project['id']?>">EDIT</a></td>
                    <td><a href="remove-projects.php?id=<?=$project['id']?>">REMOVE</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>