<?php
    include("db.php");

    $flag = 0;

    if(isset($_POST['submit'])){
        $result = mysqli_query($con, "insert into users(username) values('$_POST[username]')");
        if($result){
            $flag = 1;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Users</title>
</head>
<body>
    <?php
        include("./header.php");
    ?>
    <div class="title" align="center">
        <div>
            <h2>Add product</h2>
        </div>
    </div>
    <?php
        if($flag){
    ?><div align="center">
        User Successfully Added! (to database)
    </div>
    <div align="center">
        <a href="./add_user.php">New user</a>
    </div>
    <?php } ?>
    <div class="user-form" align="center">  
        <div>
            <form action="add_user.php" method="POST">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                    <input type="submit" value="submit" name="submit" class="" required>
                </div>
            </form>
        </div>
        <div>
            <a href="add.php">Add Products/Movies</a>
        </div>
    </div>
</body>
</html>