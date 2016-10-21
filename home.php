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
<img src="ucm.jpg" width="100%" height="17%"/></header>
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
<br><br>
<Div id="content">
<table id="hometable" border="4">
<tr>
<td>
<img src="students.jpg" width="100%" height="100%">
</td>
<td valign="top" bgcolor="ECA45C">
<font color="white">
<B><U>Our Mission & Membership</U></B>
<P>
The project is about UCM Indian Students Alumni Network Portal. This website is useful where
students can find the details of other students belonging to UCM community.</p>
<p>
This is an unique effort by "Harish,Gowtham and Sowmya" to provide all the UCM Indian alumni an exclusive network to stay connected. 
</P>
</font>
</td>
</table>
</Div>

<footer style="position:absolute;bottom:10px; width:100%;">
	&copy; Created By Alumni Developers 
</footer>
</body>
</html>