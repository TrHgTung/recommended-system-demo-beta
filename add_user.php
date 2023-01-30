<?php
    // session_start();
    error_reporting(E_ERROR | E_PARSE);
    
    include("check_login.php");
    include("db.php");

    $user_data = check_login($con);
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
    <title>Thêm Người Khảo Sát Mới</title>
    <script src="./AlertifyJS/alertify.min.js"></script>
    <script src="./AlertifyJS/alertify.js"></script>
    <link rel="stylesheet" href="./AlertifyJS/css/alertify.css">
    <link rel="stylesheet" href="./AlertifyJS/css/alertify.min.css">
</head>
<body>
    <script>
        alertify.message('Đăng nhập admin thành công');
    </script>
    <?php
        include("./header.php");
    ?>
    <div class="title" align="center">
        <div>
            <h4>Giao diện thêm người chơi</h4>
        </div>
    </div>
    <?php
        if($flag){
    ?><div align="center">
        Đã thêm <?php echo $_POST['username']; ?> thành công vào CSDL!
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
            <!-- <a href="add.php">Add Products/Movies</a> -->
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>