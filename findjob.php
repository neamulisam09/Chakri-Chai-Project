<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
        <link rel="stylesheet"href="findjob.css">
	</head> 
	<body> 
	<table align="center" border="1px" style="width:1200px; line-height:80px;"> 
	<tr> <tr> 
		<th colspan="8"><h2>Posted Job</h2></th> 
		</tr> 
		
			  <th> Company Name </th> 
			  <th> Company ID </th> 
			  <th> Job Category</th> 
			  <th> Job Title </th> 
			  <th> Salary </th> 
			  <th> Skill Required </th> 
			  <th> Job Experience </th> 
			  <th> Job Location </th> 
			  
		</tr> 
        <?php

        $conn = mysqli_connect("localhost", "root","", "chakrichai"); 
        if ($conn-> connect_error) {

        die("Connection failed: ". $conn-> connect_error);

        }

        $sql = "SELECT cname, cid, category, jtitle, spackage, srequired, experience, jlocation from jobpost"; 
        $result = $conn-> query($sql);
        
            if ($result-> num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

            echo "<tr><td>" . 
                $row["cname"]."</td><td>".   $row["cid"]."</td><td>". 
                $row["category"]."</td><td>". 
                $row["jtitle"]."</td><td>". 
                $row["spackage"]."</td><td>". $row["srequired"]."</td><td>". $row["experience"]."</td><td>". $row["jlocation"]."</td></tr>";

            }

            echo "</table>";

            } else {

            echo "0 result";

            }

          ?> 

	</table> 
	</body> 
	</html>