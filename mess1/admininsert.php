<?php
$admin = $_POST['admin'];

$password = $_POST['password'];
if (!empty($admin) || !empty($password)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mess";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT admin From admin Where admin = ? Limit 1";
     $INSERT = "INSERT Into admin(admin,password) values(?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $admin);
     $stmt->execute();
     $stmt->bind_result($admin);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ii", $admin,$password);
      $stmt->execute();
	 echo "<script>alert('New record inserted sucessfully')</script>;";
     } else {
      echo "<script>alert('Someone already register using this id')</script>;";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
