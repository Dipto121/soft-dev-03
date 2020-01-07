<html>
<head>
    <title>Registration Form </title>
    <style type="text/css">
    	body{
    margin: 0;
    padding: 0;
    background: url(image.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.login-box{
    width: 400px;
    height: 600px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 65%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}
*{
	margin:0px;
	padding:0px;
}
	
.menu{
	width:100%;
	height:100px;
	background-color: rgba(0,0,0,0.5);
}
.leftm{
	width:30%;
	line-height:100px;
	float:left;
	margin-right:0px;
}
.leftm h3{
	padding-left:80px;
	font-weight:bold;
	color: #0099ff;
	font-size:25px;
	font-family:

}
.rightm{
	width:70%;
	height:50px;
	float:right;
}
.rightm ul{
	margin-left:100px;
}
.rightm ul li{
	display: inline-block;
	list-style:none;
	font-size:15px;
	color:white;
	font-weight: bold;
	line-height: 100px;
	margin-left: 30px;
	text-transform:uppercase;	
}
#fisrtlist{
	color: orange;
}

.rightm ul li:hover{
	color: orange;
}


.text{
	width: 100%;
	margin-top: 185px;
	text-transform: uppercase;
	text-align: center;
	color:white;
}

.text h3{

	font-size: 20px;
    color:white;
}

.text h2{
	font-size:62px;
	color:#009900;
	font-weight: 700px;
	margin:14px 0px;
	background-color:skyblue;
	
}


#bone{
	background-color: orange;
	border: none;
	font-size: 12px;
	font-weight: bold;
	text-transform: uppercase;
	line-height: 40px;
	width: 150px;
	
	box-shadow: 5px 8px 16px 5px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	margin-top: 25px;
	border: 3px solid green;
	border-radius: 4px 8px 8px 4px;
}

#btwo{

	background-color: skyblue;
	border: none;
	
	text-transform: uppercase;
	font-weight: bold;
	line-height: 40px;
	width: 150px;
	border: 3px solid blue;
}


    </style>
</head>
    <body>
	 <div class="bgi">
	   <div class="menu">
	     <div class="leftm">
		   <h3>Mess Management System </h3>
		 </div>
		   <div class="rightm">
		   <ul>
		      <a href="admin.php"> <li class="firstlist">Admin Home</li>
			  <a href="reg.php"> <li>Registration</li></a>
			   <a href="meal.php"><li>Meal</li></a>
			  <a href="acc.php"> <li>Account Section</li></a>
			  <a href="month.php"> <li>Monthly End</li></a>
			  <a href="index.html"> <li>LOgout</li></a>
		   </ul>
	
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Registration Here</h1>
            <form  method="POST" action="insert.php">
			<p>Name</p>
            <input type="text" name="name" placeholder="Enter Your Name">
			<p>Amount</p>
            <input type="text" name="bal" placeholder="Enter Amount">
			<p>Email</p>
            <input type="text" name="email" placeholder="Enter Your Email">
			<p>Address</p>
            <input type="text" name="address" placeholder="Enter Your Address">
			<p>Phone number</p>
            <input type="text" name="number" placeholder="Enter Your Number">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Registration">
			<input type="submit" name="submit" value="Log in">
			
            			
            </form>
        
        
        </div>
    
    </body>
</html>