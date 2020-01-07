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
			  <a href="acc.php"> <li>Account Section</li></a>
			  <a href="month.php"> <li>Monthly End</li></a>
			    <a href="index.html"> <li>Logout</li></a>

		   </ul>

 <table class="table">
	<thead>
		<tr class="tr">
			<th> Member ID</th>
			<th>Member Name</th>
			<th>Total Amount</th>
			<th colspan="2">Amount</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($result)) { ?>
		<tr class="tr">
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['bal']; ?></td>
			<td>
			<form action="accsave.php" method="post">
			<input type="text" name="bal" placeholder="Enter Amount">
			<input type="hidden" name="mealid" value="<?php echo $row['id']; ?>">

			
			<input type="submit" name="done" value="Save">
			
			</form>
			</td>
		</tr>
				
	<?php } ?>
</table>


  </body>
  </html>
