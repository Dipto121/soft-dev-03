<?php 

$host="localhost";
$user="root";
$password="";
$db="mess";
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['email'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from reg where email='".$email."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
		    header("Location:index.html");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>