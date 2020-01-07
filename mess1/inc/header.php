<?php 

$host="localhost";
$user="root";
$password="";
$db="mess";
$con=mysqli_connect($host,$user,$password,$db);

?>


<?php
 session_start();

 $email =  $_SESSION['id'];


 $user_query = "SELECT * FROM reg WHERE email = '$email' ";
 $rs = mysqli_query($con,$user_query);
 if ($rs) {
 	 $row = mysqli_fetch_array($rs);
 	 $name = $row['name'];
     $addrss = $row['address'];
 	 $mobile = $row['number'];
 	 $total_joma = $row['bal'];
 	 $total_khoroch = $row['due'];
 	 $pymnt = $row['Payment'];
 }



?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile </title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<nav class="navbar bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Mess</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
  		<li class="nav-item" style="color: red;"><?php echo  $name; ?></li>
  	</ul>
  <div style="float: right !important;">

  
  	<a href="user_logout.php?action"><button class="btn btn-danger">logout</button></a>
  </div>
</nav>


