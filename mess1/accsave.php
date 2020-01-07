<?php
$host="localhost";
$user="root";
$password="";
$db="mess";
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

 if(isset($_POST['done'])){

 $bal= $_POST['bal'];
 $mealid = $_POST['mealid'];
 
 $query = "select * from reg where id = $mealid";
  $rslt = mysqli_query($con,$query);
  $row = mysqli_fetch_array($rslt);
  $bal_no = $row['bal'];
  
  $total_bal= $bal_no+$bal;
    
	
 
 $q = " update reg set bal='$total_bal' where id=$mealid  ";

 $query = mysqli_query($con,$q);

 header('location:acc.php');
 }

?>

