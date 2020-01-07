<?php 

$host="localhost";
$user="root";
$password="";
$db="mess";
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if($con){
    
    $sql="SELECT * FROM admin";
    $result=mysqli_query($con,$sql);
	}
	
	?>
<!doctype html>
<html>
	<head><title>member</title>
	<link rel="stylesheet" type="text/css" href="delete.css">
	</head>
	
	<body>
	
	<div class="bgi">
	   <div class="menu">
	     <div class="leftm">
		   <h3>Mess Management System </h3>
		 </div>
		   <div class="rightm">
		   <ul>
		      <a href="admin.php"> <li class="firstlist">Admin Home</li>
			  <a href="reg.php"> <li>Registration</li></a>
			   <a href="meal.php"><li>Meal</li></a>
			  <a href="acc.html"> <li>Account Section</li></a>
			  <a href="month.html"> <li>Monthly End</li></a>
		   </ul>

 <table class="table">
	<thead>
		<tr class="tr">
			<th>Admin Id</th>
			
			<th colspan="1">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($result)) { ?>
		<tr class="tr">
			<td><?php echo $row['admin']; ?></td>
			<td>
				<a href="q.php?admin=<?php echo $row['admin']; ?>" class="del_btn">Delete</a>
				</td>
		</tr>
	<?php } ?>
</table>


  </body>
  </html>
