<?php
session_start();
if(!isset($_SESSION['number']))
{
	header("location:index.php");
}

?>

<!-- Created by Harish,Gowtham,Sowmya
 last 4 digits of id: 9594,9901,0890 -->
<html>
<head>
<link rel="stylesheet" type="text/css" href="home.css"/>
<title>
Student Alumni Home Page 
</title>
</head>
<header>
<img src="ucm.jpg" width="100%" height="17%"/>
</header>
<body>
<!--Menu-->
	<nav id="horizantalMenu">
	<ul>
	<li><a href="home.php" class="active">Home</a></li>
	<li><a href="FindAlumni.php">Find Alumni</a></li>
	<li><a href="MyProfile.php">My Profile</a></li>
	<li><a href="ChangePassword.php">Password Change</a></li>
	<li><a href="ContactUs.php">Contact Us </a></li>
	<li><a href="Logout.php">Logout</a></li>
	</ul>
	</nav>
<!--Menu-->

<Div id="content">
<center>
<table border="2" >
<tr>
	<td><img src="Harish.jpg" height="150px"></td>
	<td bgcolor="#ffffff">
	Harish Goud Avali<br>
	University of Central Missouri<br>
	Warrensburg,Missouri<br>
	Zipcode:64093<br>
	Phone:913-850-9126<br>
	Email:HXA95940@ucmo.edu<br>
	</td>
</tr>
<tr>
	<td><img src="Gowtham.jpg" height="150px"></td>
	<td bgcolor="#ffffff">
	Gowtham Reddy Mandli<br>
	University of Central Missouri<br>
	Warrensburg,Missouri<br>
	Zipcode:64093<br>
	Phone:660-238-2439<br>
	Email:GXM99010@ucmo.edu<br>		   
	</td>
</tr>
<tr>
	<td><img src="Sowmya.jpg" height="150px"></td>
	<td bgcolor="#ffffff">
	Sowmya Gunnam Reddi<br>
    University of Central Missouri<br>
	Warrensburg,Missouri<br>
	Zipcode:64093<br>
	Phone:660-238-4867<br>
	Email:SXG08901@ucmo.edu<br>
	</td>
</tr>
</table>
</Div>
<footer>
&copy; Created By Alumni Developers
</footer>
</body>
</html>