<?php
    session_start();
    if(isset($_GET['id'])){
        $_SESSION['id'] = $_GET['id'];
    }

    include("db.php");
    include("header.php");

    $users = mysqli_query($con, "select username from users where id");
    $username = mysqli_fetch_array($users);
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
    <title>Thêm Mới Các Thông Tin Cho <?php echo $username['username']; ?></title>
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
                    <!-- <label for="">Tên tướng LMHT</label> -->
                    <!-- <input type="text" name="movie_name" id="movie_name" class="form-control " required> -->

                    <label for="">Chọn tuần tự từng nhân vật trong LMHT:</label>
                    <select name="movie_name" id="">
                        <option value="Shen">Shen</option>
                        <option value="Fiora">Fiora</option>
                        <option value="Darius">Darius</option>
                        <option value="Zac">Zac</option>
                        <option value="Olaf">Olaf</option>
                        <option value="Garen">Garen</option>
                        <option value="Warwick">Warwick</option>
                        <option value="Kled">Kled</option>
                        <option value="Gwen">Gwen</option>
                        <option value="Nasus">Nasus</option>
                        <option value="Yasuo">Yasuo</option>
                        <option value="Teemo">Teemo</option>
                        <option value="Udyr">Udyr</option>
                        <option value="Gangplank">Gangplank</option>
                        <option value="Poppy">Poppy</option>
                        <option value="Quinn">Quinn</option>
                        <option value="Urgot">Urgot</option>
                        <option value="Sett">Sett</option>
                        <option value="Zorick">Zorick</option>
                        <option value="Leesin">Leesin</option>
                        <option value="Malphite">Malphite</option>
                        <option value="Kayle">Kayle</option>
                        <option value="Singed">Singed</option>
                        <option value="Mordekaiser">Mordekaiser</option>
                        <option value="Camille">Camille</option>
                        <option value="Akshan">Akshan</option>
                        <option value="Renekton">Renekton</option>
                        <option value="Maokai">Maokai</option>
                        <option value="Jayce">Jayce</option>
                        <option value="Sion">Sion</option>
                        <option value="Gnar">Gnar</option>
                        <option value="Pantheon">Pantheon</option>
                        <option value="Ornn">Ornn</option>
                        <!-- Khác -->
                        <option value="Ahri">Ahri</option>
                        <option value="Caitlyn">Caitlyn</option>
                        <option value="Diana">Diana</option>
                        <option value="Elise">Elise</option>
                        <option value="Fizz">Fizz</option>
                        <option value="Jax">Jax</option>
                        <option value="Kalista">Kalista</option>
                        <option value="Karma">Karma</option>
                        <option value="Master_Yi">Master Yi</option>
                        <option value="Nocturne">Nocturne</option>
                        <option value="Shaco">Shaco</option>
                        <option value="Taric">Taric</option>
                        <option value="Thresh">Thresh</option>
                        <option value="Twitch">Twitch</option>
                        <option value="Vayne">Vayne</option>
                        <option value="Vladimir">Vladimir</option>
                        <option value="Yuumi">Yuumi</option>
                        <option value="Zeri">Zeri</option>
                        <option value="Ziggs">Ziggs</option>
                        <option value="Zoe">Zoe</option>
                    </select>
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