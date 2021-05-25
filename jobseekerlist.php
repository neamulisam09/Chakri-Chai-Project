<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
        <link rel="stylesheet"href="findjob.css">
	</head> 
	<body> 
	<table align="center" border="1px" style="width:1200px; line-height:80px;"> 
	<tr> <tr> 
		<th colspan="9"><h2>JobSeeker Details</h2></th> 
		</tr> 
		
			  <th> Firsl Name </th> 
			  <th> Last Name </th> 
			  <th> User ID </th> 
			  <th> Mobile No </th> 
			  <th> Email </th> 
			  <th> Address </th> 
			  <th> Country </th> 
			  <th> Birthday </th> 
			  <th> Operation </th> 
			     
		</tr> 
        <?php

        $conn = mysqli_connect("localhost", "root","", "chakrichai"); 
        if ($conn-> connect_error) {

        die("Connection failed: ". $conn-> connect_error);

        }

        $sql = "SELECT fname, lname, uid, mobile, mail, address, country, birthday from jobseeker"; 
        $result = $conn-> query($sql);
        
            if ($result-> num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

            echo "<tr><td>" . 
                $row["fname"]."</td><td>".   
                $row["lname"]."</td><td>".   
                $row["uid"]."</td><td>". 
                $row["mobile"]."</td><td>". 
                $row["mail"]."</td><td>". 
                $row["address"]."</td><td>". 
                $row["country"]."</td><td>". 
                $row["birthday"]."</td><td><a href='jobseekerdelete.php?id=$row[uid]'> Delete</td></tr>";

            }

            echo "</table>";

            } else {

            echo "0 result";

            }

          ?> 

	</table> 
	</body> 
	</html>