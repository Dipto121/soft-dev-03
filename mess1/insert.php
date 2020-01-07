<?php
$name = $_POST['name'];
$bal = $_POST['bal'];
$email = $_POST['email'];
$address = $_POST['address'];
$number = $_POST['number'];
$password = $_POST['password'];

if (!empty($name) || !empty($bal) || !empty($email) || !empty($address) || !empty($number) || !empty($password)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mess";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From reg Where email = ? limit 1";
     $INSERT = "INSERT Into reg (name,bal, email,address,number , password) values(?, ?, ?, ?, ?,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $name, $bal, $email, $address, $number , $password);
      $stmt->execute();
      echo "<script>alert('Regstrition done')</script>";
	    header("Location:admin.php");
     } else {
      echo "Someone already register using this email or Username";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
 
}
 
?>