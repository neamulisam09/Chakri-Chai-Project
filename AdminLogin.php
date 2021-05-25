<?php

$aid = $_POST['aid'];
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
    $stmt = $conn->prepare("select *from admin where aid= ?");
    $stmt->bind_param("i", $aid);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows >0){
        $data= $stmt_result->fetch_assoc();
       if($data['pass']=== $pass) {
             echo "<script>window.location.assign('aHome.html');</script>";
                            
       }else{
            echo "<script>window.location.assign('aerrorlogin.html');</script>";
       }
    }else{
         echo "<script>window.location.assign('aerrorlogin.html');</script>";
    }
}

?>