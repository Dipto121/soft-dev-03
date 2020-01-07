<?php 

$host="localhost";
$user="root";
$password="";
$db="mess";
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
if($con){
    $id = $_GET['id'];
    $sql=" DELETE FROM `reg` WHERE id = $id ";
    $result=mysqli_query($con,$sql);
	}
   header('location:admin.php');

	?>