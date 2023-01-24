<?php
    include("header.php");
    include("db.php");

?>
<html>
    <head>
        <title>Index Page</title>
    </head>
    <body>
        <div>
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
                        $result = mysqli_query($con, "select * from user_movies where user_id = '$_GET[id]' ");

                        while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['movie_name']; ?>
                        </td>

                        <td>
                            <?php echo $row['movie_rating']; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </body>
</html>