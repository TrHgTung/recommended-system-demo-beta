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
    <title>Add New Movies Info</title>
</head>
<body>
    <div class="title" align="center">
        <div>
            <h2>Add product</h2>
        </div>
    </div>
    <?php
        if($flag){
    ?><div align="center">
        Movie Information Successfully Added! (to database)
    </div>
    <?php } ?>
    <div class="user-form" align="center">  
        <div>
            <form action="add_movies.php" method="POST">
                <div>
                    <label for="">Name of Movie</label>
                    <input type="text" name="movie_name" id="movie_name" class="form-control" required>
                </div>
                <div>
                    <label for="">Rating</label>
                    <input type="number" name="movie_rating" id="movie_rating" class="form-control" required>
                </div>
                <div>
                    <input type="submit" name="submit" value="submit" required>
                </div>
            </form>
        </div>
    </div>
    <!-- <div align="center">
        <a href="./index.php">Back to home page</a>
    </div> -->
    <?php include("footer.php"); ?>
</body>
</html>