<?php

$uid = $_POST['uid'];
$pass = $_POST['pass'];

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "chakrichai";
    
    //for connection
    
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if($conn->connect_error){
    die("Failed to Connect: ".$conn->connect_error);
}else{
    $stmt = $conn->prepare("select *from company where uid= ?");
    $stmt->bind_param("i", $uid);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows >0){
        $data= $stmt_result->fetch_assoc();
       if($data['pass']=== $pass) {
           echo "<script>window.location.assign('WELCOMECOMPANY.html');</script>";
       }else{
             echo "<script>window.location.assign('cerrorlogin.html');</script>";
       }
    }else{
         echo "<script>window.location.assign('cerrorlogin.html');</script>";
    }
}

?>