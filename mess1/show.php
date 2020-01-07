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

<html>
   <head><title>Admin Panel</title>
    <style>
	*{
	margin:0px;
	padding:0px;
}
.bgi{
	background-image:url('5.jpg');
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
    width: 90%;
    margin: 15px;
	height:20px;
    border-collapse: collapse;
    text-align: left;
}
.tr {
    border-bottom: 15px solid #cbcbcb;
}
.th, td{
    border: 2px;
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
    background: green;
}
.h1{
	color:white;
	text-align:center;
	font-size:px;
}
.edit {
    text-decoration: none;
    padding: 5px 10px;
    color: white;
    border-radius: 3px;
    background: blue;
}
.logout{
	margin-left:90%;
	margin-top:35%;
	color:blue;
}
.nav{
	display: none;
	color: orange;
}
.nav ul li a{
   display: block;
}
.nav ul li:hover 
   {
    display:block;
   }
.side{
	margin-top: 5%;
	margin-left: 40px;
   }
 .button {
  background-color:blue; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button1 {border-radius: 12px;}
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
		      <a href="admin.php"> <li class="firstlist">Admin home</li>
			  <a href="reg.php"> <li>Registration</li></a>
			   <a href="meal.php"><li>Meal</li></a>
			  <a href="acc.php"> <li>Account Section</li></a>
                 <a href="month.php"><li>Monthly End </li></a>
                    <a href="index.html"><li>Logout</li></a>
		   </ul>
		   <table class="table">
	<thead>
		<tr class="tr">
			<th> Member ID</th>
			<th>Member Name</th>
			<th>Email</th>
			<th>Balance</th>
			<th colspan="2">Due</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($result)) { ?>
		<tr class="tr">
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['bal']; ?></td>
			<td><?php echo $row['due']; ?></td>
			<td>
			
			</td>
		</tr>
				
	<?php } ?>
</table>
		</div>
	</div>
	<div class=side>
   <a href="show.php"><button class="button button1">ACCOUNT ALL MEMBER</button></a><br><br>
    <a href="bill.php"><button class="button button1">All BILL</button></a>
	</div>
	
</body>
</html>