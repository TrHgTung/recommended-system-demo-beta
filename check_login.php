<?php
    session_start();

    function check_login($con){
        if( isset($_SESSION['id']) ){
            $id = $_SESSION['id'];
            $query = "select * from admin where id = '$id' AND pass='$pass' limit 1";      
            $result = mysqli_query($con,$query);

            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            } 
        } 
        // header("Location: admin_login.php");
        // header("Location: add_user.php");
        // die;
    }
?>