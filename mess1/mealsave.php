<?php
$host="localhost";
$user="root";
$password="";
$db="mess";
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

 if(isset($_POST['done'])){

 $meal= $_POST['meal'];
 $mealid = $_POST['mealid'];
 
 $query = "select * from reg where id = $mealid";
  $rslt = mysqli_query($con,$query);
  $row = mysqli_fetch_array($rslt);
  $meal_no = $row['meal'];
  
  $total_meal= $meal_no+$meal;
    
	
 
 $q = " update reg set meal='$total_meal' where id=$mealid  ";

 $query = mysqli_query($con,$q);

 header('location:meal.php');
 }

?>

