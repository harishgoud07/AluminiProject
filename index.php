
<!-- Created by Harish,Gowtham,Sowmya
 last 4 digits of id: 9594,9901,0890 -->
 <html>
<head>
<link rel="stylesheet" type="text/css" href="home.css"/>
<script type="text/javascript" src="indexpage.js"> </script> 
<title>
Student Alumni Home Page 
</title>

</head>
<header>
<img src="ucm.jpg" width="100%" height="17%"/>
</header>

<?php

if(isset($_POST['Submit']))
{
$number=$_POST['student700'];
$passw=$_POST['Password'];
$dbc=mysqli_connect('localhost','harish','1234','test') or die("wrong");
$query="select * from st_login_table where stu_num=$number and password='$passw'";
$result=mysqli_query($dbc,$query) or die ("problem");
$data=mysqli_fetch_array($result);
	if($data>0)
	{
	session_start();
	$_SESSION['number']=$number;
	header('location:home.php');
	}
else
{
echo '<script type="text/javascript">alert("Enter Valid Details");</script>';
header('Refresh:0.005;url=index.php');
}
mysqli_close($dbc);
}
?>
<body>
<!--Menu-->
	<nav id="horizantalMenu">
	<ul>
	<li><a href="index.php"class="active">Home</a></li>
	</ul>
	</nav>
<!--Menu-->

<Div id="content">
<table>
<tr>
<td>
<img src="images.gif" width="90%" height="100%">
</td>
<td>
<center><font size=4 style><b>Student Login !!</b></font></center>
<form method="post" action="index.php">
<table>
<tr>
<td>Student 700#</td>
<td><input type="Text" id="student700" name="student700"></td>
<tr>
<td>Password</td>
<td><input type="Password" id="Password" name="Password"></td>
<tr>
<td><a href="join.php"><font color="#ffffff">Not A Member?</font></a></td>
<td><input type="Submit" id="Submit" name="Submit" Value="Submit" onclick=" return validate()"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<div id="errordisplay"></div>
</Div>
<footer style="position:absolute;bottom:10px; width:100%;">
	&copy; Created By Alumni Developers
</footer>
</body>

</html>