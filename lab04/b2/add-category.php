
<?php
    require_once '../common/common.php';
    checkLogIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../common/style.css">
    <title>Document</title>
</head>
<body>
   <div class="main">
        <form class="form" action="save-add-category.php" method="post">
            <div class="form-group">
                <label class="form-label">Name</label>
                <input class="form-control" type="text" name="name">
                <?php if(isset($_GET['nameErr'])): ?>
                    <p class="error-massage" style="color: red"><?= $_GET['nameErr']?></p>
                <?php endif ?>
            </div>
                <button type="submit" class="form-submit">Submit</button>
            </div>
        </form>
   </div>
</body>
</html>