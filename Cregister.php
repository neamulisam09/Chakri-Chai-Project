<?php
$cname = filter_input(INPUT_POST, 'cname');
$uid = filter_input(INPUT_POST,'uid');
$lnumber = filter_input(INPUT_POST,'lnumber');
$mobile = filter_input(INPUT_POST,'mobile');
$mail = filter_input(INPUT_POST,'mail');
$address = filter_input(INPUT_POST,'address');
$country = filter_input(INPUT_POST,'country');
$pass = filter_input(INPUT_POST,'pass');

if(!empty($cname) ||!empty($uid) ||!empty($lnumber) ||!empty($mobile) ||!empty($mail) ||!empty(address) ||!empty($country) ||!empty($pass)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "chakrichai";
    
    //for connection
    
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if(mysqli_connect_error()){
        die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        
        $sql = "INSERT INTO company (cname, uid, lnumber, mobile, mail, address, country, pass) 
        values('$cname', '$uid', '$lnumber', '$mobile', '$mail', '$address', '$country', '$pass')";
        
        if($conn->query($sql)){
             echo "<script>window.location.assign('cnHome.html');</script>";
        }
        else{
            echo "<script>window.location.assign('cerrorreg.html');</script>";
        }
        $conn->close();
    }
}else{
    echo "<script>window.location.assign('cerrorreg.html');</script>";
}

?>