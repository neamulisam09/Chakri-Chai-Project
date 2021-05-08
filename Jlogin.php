<?php

    session_start();

    $conn = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($conn, 'chakrichai');

        $uid = $_POST['uid'];

        $pass = $_POST['pass'];

        $s = "select * from jregister where uid = '$uid' && pass = '$pass'";

        $result = mysqli_query($conn, $s);

        $num = mysqli_num_rows($result);

    if ($num == 1){

            $_SESSION['uid'] = $uid;

            echo"<h2>Login Succesfully</h2>";

    }else{
        echo"<h2>Invalif User Id or Password</h2>";
    }
?>