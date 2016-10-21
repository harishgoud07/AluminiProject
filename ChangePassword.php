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
<script>
function validate()
{
	var message="";
	
	var currentpwd=document.getElementById("cpwd").value;
	var newpassword=document.getElementById("npwd").value;
	
	if(currentpwd == null || currentpwd == "")
	{
		message=message+"Please enter Current password\n";
		cpwd.style.background="yellow";
	}
	if(newpassword == null || newpassword == "")
	{
		message=message+"Please enter New password\n";
		npwd.style.background="yellow";
	}
	
	if(message!='')
	{
		window.alert(message);
		return false;
	}
	else
	{
		return true;
	}
	
}

</script> 
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

<?php
$number=$_SESSION['number'];
$dbc=mysqli_connect('localhost','harish','1234','test') or die("wrong");
$query="select password from st_login_table where stu_num='$number'";
$result=mysqli_query($dbc,$query) or die (mysqli_error());
$data=mysqli_fetch_assoc($result);
	if(isset($_POST['Submit']))
	{
	$cpass=$_POST["cpwd"];
	if($cpass==$data['password'])
		{
		$npass=$_POST["npwd"];
		$query="update st_login_table set password=$npass where stu_num='$number'";
		$result=mysqli_query($dbc,$query) or die ("problem");
		echo "<font color=\"#ff0000\">Congratulations!! password has been changed</font>";
		}
		else
		{
			echo " <font color=\"red\">Current password entered wrong!!</font> ";
		}
	}
?>
<br><br><br>
<div id="profile_content">
<form method="post" action="ChangePassword.php">
<table width="300" bgcolor="white" align="center" cellpadding="0" border="0">
<tr>
<td colspan="2"><center>Enter Password Details</center>
</tr>

<tr>
<td>Current Password
<td><input type="Password" name="cpwd" id="cpwd">
</tr>
<tr>
<td>New Password
<td><input type="Password" name="npwd" id="npwd">
</tr>
<tr>
<td>
<td><input type="Submit" value="Submit" name="Submit" onclick="return validate()">
</tr>
</table>
</form>
<div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
&copy; Created By Alumni Developers 
</footer>
</body>
</html>