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
<script type="text/javascript" src="search.js">
</script>
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
	<li><a href="FindAlumni.php">Search Alumni</a></li>
	<li><a href="MyProfile.php">My Profile</a></li>
	<li><a href="ChangePassword.php">Password Change</a></li>
	<li><a href="ContactUs.php">Contact Us </a></li>
	<li><a href="Logout.php">Logout</a></li>
	</ul>
	</nav>
<!--Menu-->
<Div id="FA_content">
<font size=5 color="white">Search</font>
</Div>
<br>
<center>
<h1><align color="White">Enter Name Below </align></h1>
<form action="FindAlumni.php" method="post">
<table>
<tr>
<td><input type="text" name="Name" id="Name"></td>
</tr>
<tr>
<td><CENTER><input type="submit"  id="alumniname" name="submit" onclick="return start()">&nbsp&nbsp<input type="button" Value="Refresh" onclick="window.location.href='FindAlumni.php'"></CENTER></td>
</tr>
</table>
<div id="errordisplay">
</div>
</form>

</center>
<center>
<table border=1 width="450" cellpadding="10" id="resulttable">
<tr bgcolor="ECA45C">
<th>Name
<th>Student number
<th>Gender
<th>Course
<th>Graduation year
<th>State
<th>City
<th>Address
<th>Email
<th>Mobile
</tr>
<tr>
<?php
if(isset($_POST["submit"]))
{
	$name=$_POST["Name"];
	$dbc=mysqli_connect('localhost','harish','1234','test') or die("wrong");
	$query="select name,stu_num,sex,course,grd_year,state,city,p_address,email,mobile from st_login_table where name like '%$name%'";
	$result=mysqli_query($dbc,$query) or die ("problem");
	$result1=mysqli_query($dbc,$query) or die ("problem");

if($data1=mysqli_fetch_array($result1)>0)
{
	echo "Below Are the List Of Alumni Students &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>";
	while($data=mysqli_fetch_assoc($result))
	{

	echo '<tr  bgcolor="white">';
	echo '<td>'.$data['name'].'</td>';
	echo '<td>'.$data['stu_num'].'</td>';
	echo '<td>'.$data['sex'].'</td>';
	echo '<td>'.$data['course'].'</td>';
	echo '<td>'.$data['grd_year'].'</td>';
	echo '<td>'.$data['state'].'</td>';
	echo '<td>'.$data['city'].'</td>';	
	echo '<td>'.$data['p_address'].'</td>';
	echo '<td>'.$data['email'].'</td>';
	echo '<td>'.$data['mobile'].'</td>';	
	
	echo '</tr>';
	}
	echo "<a href='javascript:window.print()'><b>Print</b></a>";
}
else
{
	echo "<p>Sorry, No Person available</p>";
}
}
?>
</table>
</center>
</body>

</html>