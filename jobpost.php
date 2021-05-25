<?php
$cname = filter_input(INPUT_POST, 'cname');
$cid = filter_input(INPUT_POST, 'cid');
$category = filter_input(INPUT_POST,'category');
$jtitle = filter_input(INPUT_POST,'jtitle');
$spackage = filter_input(INPUT_POST,'spackage');
$srequired = filter_input(INPUT_POST,'srequired');
$experience= filter_input(INPUT_POST,'experience');
$jlocation= filter_input(INPUT_POST,'jlocation');

if(!empty($cname) ||!empty($cid) ||!empty($category) ||!empty($jtitle) ||!empty($spackage) ||!empty($srequired) ||!empty($experience) ||!empty($jlocation)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "chakrichai";
    
    //for connection
    
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if(mysqli_connect_error()){
        die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        
        $sql = "INSERT INTO jobpost (cname, cid, category, jtitle, spackage, srequired, experience, jlocation) 
        values('$cname', '$cid', '$category', '$jtitle', '$spackage', '$srequired', '$experience', '$jlocation')";
        
        if($conn->query($sql)){
 echo "<script>window.location.assign('success.html');</script>";        
      }
        else{
            echo "<script>window.location.assign('Ejobpost.html');</script>"; 
        }
        $conn->close();
    }
}else{
    echo "<script>window.location.assign('Ejobpost.html');</script>"; 
    die();
}
