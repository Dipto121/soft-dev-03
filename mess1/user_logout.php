<?php 
session_start();
if (isset($_GET['action'])) {
	session_destroy();
	header("Location:index.html");
}




 ?>