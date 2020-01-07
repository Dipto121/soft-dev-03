<?php 

$host="localhost";
$user="root";
$password="";
$db="mess";
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if($con){
    
    $sql="SELECT * FROM reg";
    
    $result=mysqli_query($con,$sql);
}
	?>
<!doctype html>
<html>
	<head><title>member</title></head>
	
	<body>
 <table align="cenetr" border="1px" style="width:600px ; line-height:40px;">
	
	
	<tr>
	     <th>First Name</th>
		 <th>Last Name</th>
	</tr>
	
	
	<?php 
	while($row=mysqli_fetch_assoc($result))
	{
     
      echo "<tr>";
	       echo "<tr>";
		   echo "<td>".$row['fname']."</td>";
		   echo "<td>".$row['lname']."</td>";
		   
		   echo"</tr>";
	echo "</tr>";
		

	} ?>
  </table>   
  </body>
  </html>