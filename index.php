<?php
    include("header.php");
    include("db.php");

?>
<html>
    <head>
        <title>Index Page</title>
    </head>
    <body align="center">
        <div align="center">
            <div>
                <h2>
                    <a href="./add_user.php">Add Users</a>
                </h2>
            </div>
            <div>
                <table>
                    <th>
                        Name of All Users
                    </th>
                    <th>
                        Add Movies
                    </th>
                    <th>
                        Showed Movies
                    </th>
                    <th>
                        Showed Recommendation
                    </th>
                    <?php
                        $result = mysqli_query($con, "select * from users");

                        while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['username']; ?>
                        </td>
                        <td>
                            <form action="add_movies.php" >
                                <input type="submit" name="add_movies" value="Add Movie">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            </form>
                        </td>

                        <td>
                            <form action="show_movies.php" >
                                <input type="submit" name="show_movies" value="Show all Movie">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            </form>
                        </td>

                        <td>
                            <form action="user_recommendation.php" >
                                <input type="submit" name="show_movies" value="Show recommended movies">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>