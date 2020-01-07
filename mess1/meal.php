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
	<head><title>Meal</title>
	<style type="text/css">
		
		*{
	margin:0px;
	padding:0px;
}
.bgi{
	background-image:url('.png');
	background-size: 100% 100%;
	width:100%;
	height:100vh;
}	
.menu{
	width:100%;
	height:100px;
	background-color: rgba(0,0,0,0.5);
}
.leftm{
	width:30%;
	line-height:100px;
	float:left;
	margin-right:0px;
}
.leftm h3{
	padding-left:80px;
	font-weight:bold;
	color: #0099ff;
	font-size:25px;
	font-family:

}
.rightm{
	width:70%;
	height:50px;
	float:right;
}
.rightm ul{
	margin-left:100px;
}
.rightm ul li{
	display: inline-block;
	list-style:none;
	font-size:15px;
	color:white;
	font-weight: bold;
	line-height: 100px;
	margin-left: 30px;
	text-transform:uppercase;	
}
#fisrtlist{
	color: orange;
}

.rightm ul li:hover{
	color: orange;
}
.table{
    width: 100%;
    margin: 25px;
	height:30px;
    border-collapse: collapse;
    text-align: left;
}
.tr {
    border-bottom: 20px solid #cbcbcb;
}
.th, td{
    border: 5px;
    height: 40px;
    padding: 4px;
}
.tr{
    background: #F5F5F5;
}

.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}

.del_btn {
    text-decoration: none;
    padding: 5px 10px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
	</style>
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
			<th>Total Meal</th>
			<th colspan="2">Meal</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($result)) { ?>
		<tr class="tr">
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['meal']; ?></td>
			<td>
			<form action="mealsave.php" method="post">
			<input type="text" name="meal" placeholder="Enter Meal">
			<input type="hidden" name="mealid" value="<?php echo $row['id']; ?>">

			
			<input type="submit" name="done" value="Save">
			
			</form>
			</td>
		</tr>
				
	<?php } ?>
</table>


  </body>
  </html>
