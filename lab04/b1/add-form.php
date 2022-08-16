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
        <form class="form" action="add.php" method="post" enctype="multipart/form-data"> 
        <div class="form-group">
                <input type="hidden" name="id">
            </div>
            <div class="form-group">
                <label class="form-label">Name</label> 
                <input class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label class="form-label">Email</label> 
                <input class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label class="form-label">Avatar</label> 
                <input class="form-control" type="file" name="avatar">
            </div>
            <div class="form-group">
                <label class="form-label">Password</label> 
                <input class="form-control" type="password" name="password">
            </div>
            <div>
                <button type="submit" class="form-submit">Save</button>
            </div>
        </form>
    </div>
</body>
</html>