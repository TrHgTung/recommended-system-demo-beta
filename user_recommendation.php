<?php
    include("header.php");
    include("recommendation_title.php");
    include("db.php");
    include("recommend.php");

    $movies = mysqli_query($con, "select * from user_movies");
    $matrix = array();

    error_reporting(E_ERROR | E_PARSE);

    while($movie = mysqli_fetch_array($movies)){
        $users = mysqli_query($con, "select username from users where id=$movie[user_id]");
        $username = mysqli_fetch_array($users);

        $matrix[$username['username']][$movie['movie_name']] = $movie['movie_rating'];
    }

    $users = mysqli_query($con, "select username from users where id=$_GET[id]");
    $username = mysqli_fetch_array($users);


    // getRecommendation($matrix, "tung2");

?>

<div align="center">
            <div>
                <h2>
                    <a href="./add_user.php">Add Users</a>
                </h2>
            </div>
            <div>
                <table>
                    <th>
                        Name of Movies
                    </th>
                    <th>
                        Rating
                    </th>
                    <?php
                        $recommendation = array();
                        $recommendation = getRecommendation($matrix, $username['username']);

                        foreach($recommendation as $movie=>$rating){
    
                    ?>
                    <tr>
                        <td>
                            <?php echo $movie; ?>
                        </td>

                        <td>
                            <?php echo $rating; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <!-- <div align="center">
            <a href="./index.php">Back to home page</a>
        </div> -->
        <?php include("footer.php"); ?>