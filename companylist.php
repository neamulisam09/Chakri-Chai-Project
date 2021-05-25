<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
        <link rel="stylesheet"href="findjob.css">
	</head> 
	<body> 
	<table align="center" border="1px" style="width:1200px; line-height:80px;"> 
	<tr> <tr> 
		<th colspan="8"><h2>Company Details</h2></th> 
		</tr> 
		
			  <th> Company Name </th> 
			  <th> Company ID </th> 
			  <th> License No</th> 
			  <th> Mobile No </th> 
			  <th> Email </th> 
			  <th> Address </th> 
			  <th> Country </th> 
			  <th> Operation </th> 
			     
		</tr> 
        <?php

        $conn = mysqli_connect("localhost", "root","", "chakrichai"); 
        if ($conn-> connect_error) {

        die("Connection failed: ". $conn-> connect_error);

        }

        $sql = "SELECT cname, uid, lnumber, mobile, mail, address, country from company"; 
        $result = $conn-> query($sql);
        
            if ($result-> num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

            echo "<tr><td>" . 
                $row["cname"]."</td><td>".   
                $row["uid"]."</td><td>". 
                $row["lnumber"]."</td><td>". 
                $row["mobile"]."</td><td>". 
                $row["mail"]."</td><td>". 
                $row["address"]."</td><td>". 
                $row["country"]."</td><td><a href='companydelete.php?id=$row[uid]'> Delete</td></tr>";

            }

            echo "</table>";

            } else {

            echo "0 result";

            }

          ?> 

	</table> 
	</body> 
	</html>