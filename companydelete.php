<?php

 $conn = mysqli_connect("localhost", "root","", "chakrichai"); 

error_reporting (0);

$uid=$_GET['id'];

$query="DELETE FROM company WHERE uid = '$uid'";

$data=mysqli_query($conn, $query);

if ($data){

echo "<script>window.location.assign('successcompanydlt.html');</script>";
}else{
echo "failed";
}
?>