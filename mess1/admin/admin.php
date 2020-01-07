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
   <head><title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="add/admin.css">
    </head>
    <body> 
	   <div class="bgi">
	   <div class="menu">
	     <div class="leftm">
		   <h3>Mess Management System </h3>
		 </div>
		   <div class="rightm">
		   <ul>
		      <a href="adminreg.php"> <li class="firstlist">Change Admin</li>
			  <a href="reg.php"> <li>Registration</li></a>
			   <a href="meal.html"><li>Meal</li></a>
			  <a href="acc.html"> <li>Account Section</li></a>
			  <a href="month.html"> <li>Monthly End</li></a>
		   </ul>
<table class="table">
	<thead>
		<tr class="tr">
			<th>Id</th>
		   <th>Name</th>
		   <th>Phone Number</th>
			<th colspan="3">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($result)) { ?>
		<tr class="tr">
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['number']; ?></td>
			
			<td>
				<a href="add/q.php?id=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
				</td>
		</tr>
	<?php } ?>
</table>

</body>
</html>