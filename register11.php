<?php
//userLogin.php
        if (isset($_POST['Create'])) {
            if (!isset($_POST['cname']) || !isset($_POST['uid']) || !isset($_POST['lnumber']) || !isset($_POST['mobile']) || !isset($_POST['mail']) || !isset($_POST['address']) || !isset($_POST['country']) || !isset($_POST['pass'])) {
                $error = "Fill up all the information correctly";
                ///echo $error;
                echo "<script>console.log('I am the error');</script>";
            } else {
                echo "<script>console.log('I am the inner');</script>";
                $conn = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($conn, "chakri_chai");
                $cname = $_POST['cname'];
                $uid = $_POST['uid'];
                $lnumber = $_POST['lnumber'];
                $mobile = $_POST['mobile'];
                $mail = $_POST['mail'];
                $address = $_POST['address'];
                $country = $_POST['country'];
                $pass = $_POST['pass'];
                //$query = "Insert into BankAccount(AC_No,AC_Name,Balance,AEmail,AMobileNo) values('$ac','$user',500.00,'$mail','$mob')";
                //echo($query);
// die();
//$result=mysqli_query($conn,$query);

                $query1 = "Insert into userinfo(cname, uid, lnumber, mobile, mail, address, country, pass) values('$cname','$uid','$lnumber','$mobile','$mail','$address','$country','$pass' )";
                $result1 = mysqli_query($conn, $query1);
                echo "insert";
                echo($query1);
                //die();
                $result = mysqli_query($conn, $query);
                header("Location: register11.php");
            }
        }
        ///echo "<br>" . $error;
        ?>