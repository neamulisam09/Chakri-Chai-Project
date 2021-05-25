<?php

    session_start();

    $conn = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($conn, 'chakrichai');

        $uid = $_POST['uid'];

        $pass = $_POST['pass'];

        $s = "select * from jobseeker where uid = '$uid' && pass = '$pass'";

        $result = mysqli_query($conn, $s);

        $num = mysqli_num_rows($result);

    if ($num == 1){

            $_SESSION['uid'] = $uid;

            echo "<script>window.location.assign('jHome.html');</script>";
    }else{
          echo "<script>window.location.assign('jerrorlogin.html');</script>";
    }
?>