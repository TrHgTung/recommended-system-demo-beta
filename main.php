    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang Chủ</title>
        <link rel="stylesheet" href="./bootstrap_css/all.min.css">
        <link rel="stylesheet" href="./bootstrap_css/bootstrap.min.css">
        <link rel="stylesheet" href="./bootstrap_css/index.css">
    </head>
    <body align="center">
        <div align="center">
            <div>
                <p>
                    <a href="./admin_login.php">Mời thêm người chơi đến khảo sát (Tính năng này chỉ dành cho admin)</a>
                </p>
            </div>

            <table align="center">
                <div class="row mb-4 text-center mt-5">
                    <div class="col-2 themed-grid-col fw-bold">Tên Người Chơi</div>
                    <div class="col-2 themed-grid-col fw-bold">ID Nhân Vật</div>
                    <div class="col-2 themed-grid-col fw-bold">Khảo sát nhanh</div>
                    <div class="col-2 themed-grid-col fw-bold">Lịch sử khảo sát</div>
                    <div class="col-2 themed-grid-col fw-bold">Đề xuất tướng cho các trận sau</div>
                </div>

                <?php
                    $result = mysqli_query($con, "select * from users");
                    while($row = mysqli_fetch_array($result)){
                ?>
                
                <div class="row mb-4 text-center mt-5">
                    <div class="col-2 themed-grid-col">
                        <?php echo $row['username']; ?>
                    </div>
                    <div class="col-2 themed-grid-col">
                        <?php echo $row['id']; ?>
                    </div>
                    <div class="col-2 themed-grid-col">
                        <form action="add_movies.php" >
                            <input type="submit" name="add_movies" class="btn btn-secondary" value="Thực hiện">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        </form>
                    </div>
                    <div class="col-2 themed-grid-col">
                        <form action="show_movies.php" >
                            <input type="submit" name="show_movies" class="btn btn-secondary" value="Xem danh sách">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        </form>
                    </div>
                    <div class="col-2 themed-grid-col">
                        <form action="user_recommendation.php" >
                            <input type="submit" name="show_movies" class="btn btn-primary" value="Hiển thị danh sách cho <?php echo $row['username']; ?>">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        </form>
                    </div>
                </div>
                <?php } ?>
            </table>
            
        <?php include("footer.php"); ?>
    </body>
</html>