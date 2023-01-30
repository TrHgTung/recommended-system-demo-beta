<?php
    // show danh sách lịch sử khảo sát của từng user
    include("header.php");
    include("db.php");
    include("product_title.php");
?>
<html>
    <head>
        <title>Xem Danh Sách</title>
    </head>
    <body align="center">
        <div align="center">
    <table>
        <div class="row mb-3 text-center mt-5 mb-3">
            <div class="col-6 themed-grid-col fw-bold">Tên quân tướng</div>
            <div class="col-6 themed-grid-col fw-bold">Tổng số trận đã thắng</div>
        </div>
        <?php
        // $username = mysqli_fetch_array($users);
                        $result = mysqli_query($con, "select * from user_movies where user_id = '$_GET[id]' ");

                        while($row = mysqli_fetch_array($result)){
                    ?>
        <div class="row mb-3 text-center">
            <div class="col-6 themed-grid-col">
                <?php echo $row['movie_name']; ?>
            </div>
            <div class="col-6 themed-grid-col">
                <?php echo $row['movie_rating']; ?>
            </div>
        </div>
        <?php } ?>
    </table>
    <div class="mt-5 mb-5">
        <div class="fw-bold fst-italic">
            Xin chào, trang này hiển thị đầy đủ những gì bạn đã cung cấp cho hệ thống. Được sắp xếp theo thứ tự thời gian nhập vào
        </div>
    </div>
</div>
        <?php include("footer.php"); ?>
    </body>
</html>