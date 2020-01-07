<?php 

$host="localhost";
$user="root";
$password="";
$db="mess";
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['admin'])){
    
    $admin=$_POST['admin'];
    $password=$_POST['password'];
    
    $sql="SELECT * from admin where admin='".$admin."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
		
		    header("Location:admin.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>