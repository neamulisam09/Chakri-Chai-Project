<?php
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$uid = filter_input(INPUT_POST,'uid');
$mobile = filter_input(INPUT_POST,'mobile');
$mail = filter_input(INPUT_POST,'mail');
$address = filter_input(INPUT_POST,'address');
$country = filter_input(INPUT_POST,'country');
$birthday = filter_input(INPUT_POST,'birthday');
$pass = filter_input(INPUT_POST,'pass');
$cv = filter_input(INPUT_POST,'cv');

if(!empty($fname) ||!empty($lname) ||!empty($uid) ||!empty($mobile) ||!empty($mail) ||!empty(address) ||!empty($country) ||!empty($birthday) ||!empty($pass)||!empty($cv)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "chakrichai";
    
    //for connection
    
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if(mysqli_connect_error()){
        die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        
        $sql = "INSERT INTO jregister (fname, lname, uid, mobile, mail, address, country, birthday, pass, cv) 
        values('$fname', '$lname', '$uid', '$mobile', '$mail', '$address', '$country', '$birthday', '$pass', '$cv')";
        
        if($conn->query($sql)){
            echo "Welcome to our Member!!";
        }
        else{
            echo "Someone already register using this email or user id";
        }
        $conn->close();
    }
}else{
    echo "Please fill-up the All information Correctly";
    die();
}

?>