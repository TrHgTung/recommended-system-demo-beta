<?php
    // hiển thị kết quả đề xuất cho từng user
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
    <table>
        <div class="row mb-3 text-center mt-5 mb-3">
            <div class="col-6 themed-grid-col fw-bold">Tên quân tướng</div>
            <div class="col-6 themed-grid-col fw-bold">Mức độ đề xuất cho bạn</div>
        </div>
        <?php
            $recommendation = array();
            $recommendation = getRecommendation($matrix, $username['username']);

            foreach($recommendation as $movie=>$rating){
        ?>
        <div class="row mb-3 text-center">
            <div class="col-6 themed-grid-col">
                <?php echo $movie; ?>
            </div>
            <div class="col-6 themed-grid-col">
                <?php echo $rating; ?>
            </div>
        </div>
        <?php } ?>
    </table>
    <div class="mt-5 mb-5">
        <div class="fw-bold fst-italic">
            Xin chào, <?php echo $username['username']; ?>. Đây là đề xuất các tướng mà bạn có thể chọn. Vị trí càng cao thì càng tốt, và mọi dữ liệu chỉ mang tính tham khảo!
        </div>
    </div>
</div>
<?php include("footer.php"); ?>