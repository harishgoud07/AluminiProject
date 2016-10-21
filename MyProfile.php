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

<?php 
$number=$_SESSION['number'];
$dbc=mysqli_connect('localhost','harish','1234','test') or die("wrong");
$query="select * from st_login_table where stu_num='$number'";
$result=mysqli_query($dbc,$query) or die ("mysql_error");
while($row = mysqli_fetch_array($result))
{ 
$name=$row[0];
$stunumber=$row[1];
$sex=$row[3];
$course=$row[4];
$gradyear=$row[5];
$state=$row[6];
$city=$row[7];
$address=$row[8];
$email=$row[9];
$contact=$row[10];
}

?>
<center>
<div id="profile_content">
<table width="50%" border="1" bgcolor="#ffffff" cellpadding="6">
  <tr>
    <td height="26" colspan="3"><center><h2><b><u>Profile Information</u></b></h2></center></td>
  </tr>
  <tr>
    <td width="129" rowspan="10" valign="top"><img src="mule.png" width="129" height="129" alt="no image found"/></td>
    <td width="82" valign="top"  align="left"><div align="left">Name:</div></td>
    <td width="165" valign="top"><?php echo $name ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">700#:</div></td>
    <td valign="top"><?php echo $stunumber ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Gender:</div></td>
    <td valign="top"><?php echo $sex ?></div></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Course:</div></td>
    <td valign="top"><?php echo $course ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Grad Year:</div></td>
    <td valign="top"><?php echo $gradyear ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">State:</div></td>
    <td valign="top"><?php echo $state ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">City:</div></td>
    <td valign="top"><?php echo $city ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Address:</div></td>
    <td valign="top"><?php echo $address ?></td>
  </tr>
    <tr>
    <td valign="top"><div align="left">Email: </div></td>
    <td valign="top"><?php echo $email ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Contact No: </div></td>
    <td valign="top"><?php echo $contact ?></td>
  </tr>
</table>
</div>
</center>
<footer>
	&copy; Created By Alumni Developers
</footer>
</body>
</html>