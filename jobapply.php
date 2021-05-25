<?php
$cname = filter_input(INPUT_POST, 'cname');
$cid = filter_input(INPUT_POST, 'cid');
$category = filter_input(INPUT_POST,'category');
$jname = filter_input(INPUT_POST,'jname');
$juserid = filter_input(INPUT_POST,'juserid');
$cv = filter_input(INPUT_POST,'cv');


if(!empty($cname) ||!empty($cid) ||!empty($category) ||!empty($jname) ||!empty($juserid) ||!empty($cv)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "chakrichai";
    
    //for connection
    
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
   if(mysqli_connect_error()){
        die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        
        $sql = "INSERT INTO jobapply (cname, cid, category, jname, juserid, cv) 
        values('$cname', '$cid', '$category', '$jname', '$juserid', '$cv')";
        
        if($conn->query($sql)){
             echo "<script>window.location.assign('sjoblist.html');</script>";
        
      }
        else{
            echo "Someone already register using this jobseeker user id";
        }
        $conn->close();
    }
}else{
    echo "Please fill-up the All information Correctly";
    die();
}
