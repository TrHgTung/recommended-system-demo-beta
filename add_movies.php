<?php
    session_start();
    if(isset($_GET['id'])){
        $_SESSION['id'] = $_GET['id'];
    }

    include("db.php");
    include("header.php");
    $flag = 0;

    if(isset($_POST['submit'])){
        $result = mysqli_query($con, "insert into user_movies(user_id,movie_name,movie_rating) values('$_SESSION[id]','$_POST[movie_name]','$_POST[movie_rating]')");
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
    <title>Thêm Mới Các Thông Tin</title>
    <link rel="stylesheet" href="./AlertifyJS/css/alertify.min.css">
</head>
<body>
    <div class="title" align="center">
        <div class="mt-5 mb-3">
            <h4>Biểu mẫu khảo sát</h4>
            <p><i>Thêm các quân tướng và tổng số trận thắng của chúng</i></p>
        </div>
    </div>
    <?php
        if($flag){
    ?>
    <script src="./AlertifyJS/alertify.min.js"></script>
    <script>
        alertify.success('Dữ liệu đã được thêm vào thành công');
    </script>
    <?php } ?>

    <div class="container-all-contents mt-5 g-3 row">
        <form action="add_movies.php" method="POST">
            <div class="d-flex justify-content-center">
                <div class="mb-4 col-md-6">
                    <label for="">Tên tướng LMHT</label>
                    <input type="text" name="movie_name" id="movie_name" class="form-control " required>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="mb-5 col-md-6">
                    <label for="">Tổng số trận thắng</label>
                    <input type="number" name="movie_rating" id="movie_rating" class="form-control" required>
                </div>
            </div>    
            <div class="text-center mb-5">
                <input type="submit" class="btn btn-primary" name="submit" value="Thêm dữ liệu này" required>
            </div>
        </form>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>