<?php 

mysql_connect('localhost','root','');

mssql_select_db('mess');
$sql="SELECT * FROM admin";
$records=mysql_query($sql);

}
?>

<html>
	<head>
	<title>admin data</title></head>
	<head>
	<body>
 <table align="cenetr" border="1px" style="width:600px ; line-height:40px;">
	
	
	<tr>
	     <th>Id</th>
		 
	</tr>
	
	
	<?php 
	while($mess=mysql_fetch_assoc($Admin_Delete))
	{
     
      echo "<tr>";
	       echo "<tr>";
		   echo "<td>".$row['id']."</td>";
		   
		   
		   echo"</tr>";
	echo "</tr>";
		

	} ?>
  </table>   
  </body>
  </html>