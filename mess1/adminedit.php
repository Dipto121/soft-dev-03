<?php
$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mess";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE reg set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', number='" . $_POST['number'] . "', address='" . $_POST['address'] . "' WHERE id='" . $_POST['id'] . "'");

function function_alert($message) { 
    echo "<script>alert('$message');</script>"; 
	  
} 
  
  
// Function call 
function_alert("Update YOur Member Data!!!"); 
  
}
$result = mysqli_query($conn,"SELECT * FROM reg WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Member Data</title>
<style>
body{
    margin: 0;
    padding: 0;
    background: url(update.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.login-box{
    width: 400px;
    height: 450px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 53%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}
*{
	margin:0px;
	padding:0px;
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
	width:65%;
	height:50px;
	float:right;
}
.rightm ul{
	margin-left:150px;
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

.rightm ul li:hover{
	color: orange;
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
			  <a href="acc.html"> <li>Account Section</li></a>
			  <a href="month.html"> <li>Monthly End</li></a>
		   </ul>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div >
<div style="padding-bottom:5px;">

</div>
<div class="login-box">
Name:
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Email: <br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
Number :<br>
<input type="text" name="number" class="txtField" value="<?php echo $row['number']; ?>">
<br>
City:<br>
<input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>">
<br>

<br>
<input type="submit" name="submit" value="Submit" class="buttom">
</div>
</div>
</form>
</body>
</html>