<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);

    include("db.php");

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $select_sql = "SELECT * FROM admin WHERE id='$uname' AND pass='$pass' limit 1";
    $result = mysqli_query($con,$select_sql);

    if ($row = mysqli_fetch_assoc($result)) {
        header('Location: add_user.php');
    }
    else {
        echo "Vui lòng đăng nhập (admin)";
        // header('Location: add_user_test.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Xác Thực Admin</title>
        <link rel="stylesheet" href="./bootstrap_css/all.min.css">
        <link rel="stylesheet" href="./bootstrap_css/bootstrap.min.css">
    </head>
    <body class="text-center">
        <center>
            <?php
                include("header.php");
            ?>
            <main class="form-signin w-100 m-auto">
                <form method="POST">
                    <h2 class="mt-2 mb-4">Xác thực quyền quản trị</h2>
                    <div class="form-floating">
                        <input type="text" class="form-control mt-3" name="uname" placeholder="1">
                        <label for="">Mã ID Quản Trị</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control mt-3" name="pass" placeholder="admin">
                        <label for="">Mật Khẩu</label>
                    </div>
                    <!-- <input class="w-100 btn btn-lg btn-primary mt-3" name="submit" type="submit" value="Xác thực"> -->
                    <div class="text-center mb-5">
                        <input type="submit" class="btn btn-lg btn-primary mt-3" name="submit" value="Xác thực" required>
                    </div>
                </form>
            </main>
        </center>
    </body>
</html>