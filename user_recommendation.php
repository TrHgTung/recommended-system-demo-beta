<?php
    include("db.php");
    include("recommend.php");

    $movies = mysqli_query($con, "select * from user_movies");
    $matrix = array();

    while($movie = mysqli_fetch_array($movies)){
        $users = mysqli_query($con, "select username from users where id=$movie[user_id]");
        $username = mysqli_fetch_array($users);

        $matrix[$username['username']][$movie['movie_name']] = $movie['movie_rating'];
    }
    // echo "<pre>";
        // print_r($matrix);
    // echo "</pre>";

    var_dump(getRecommendation($matrix, "tung2"));
    // getRecommendation($matrix, "tung2");

?>