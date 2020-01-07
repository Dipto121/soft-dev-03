<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>USER </title>
	<link rel="stylesheet" type="text/css" href="user.css">
</head>
<body>
	<div class="bgi">
					<div class="php"><?php
 session_start();
 echo "Hello <br>". $_SESSION['id'];

?></div>
		<div class="menu">
			<div class="leftm"> <h3>Mess Management Systems</h3></div>

			<div class="rightm">		
				<ul>
				<a href="Profile.php"><li>Profile</li></a>
                <a href="accu.php"><li>Account</li></a>
                <a href="pay.php"><li>Payment</li>
                <a href="index.html"><li>Logout</li></a>

			</ul>
		</div>

		</div>
  </div>
  

</body>
</html>
