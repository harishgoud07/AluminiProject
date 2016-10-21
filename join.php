
<!-- Created by Harish,Gowtham,Sowmya
 last 4 digits of id: 9594,9901,0890 -->
<html>
<head>
<link rel="stylesheet" type="text/css" href="home.css"/>
<script type="text/javascript" src="validate.js"></script>
<title>
Student Alumni Home Page 
</title>
</head>

<header>
<img src="ucm.jpg" width="100%" height="17%"/>
</header>
<body>
<!--Menu-->
	<nav>
	<ul>
	<li><a href="index.php"class="active" id="joinhome">Home</a></li>
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
 <form action="join.php" method="post" name="StudentRegistration" onsubmit="return(validate());">

<table cellpadding="2" width="20%" align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><b>Student Registration Form</b></font></center>
</td>
</tr>

<tr>
<td>Name</td>
<td><input type="text" name="stud_name" id="stud_name" size="30"></td>
<td><p id ="nameAlert"></p></td>
</tr>

<tr>
<td>Student700#</td>
<td><input type="text" name="student700" id="student700"></td>
<td><p id ="IdAlert"></p></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password" id="password"></td>
<td><p id ="PasswordAlert"></p></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="sex" value="Male" size="10">Male
<input type="radio" name="sex" value="Female" size="10">Female</td>
<td><p id ="genderAlert"></p></td>
</tr>

<tr>
<td>Course</td>
<td><select name="Course" id="Course">
<option value="-1" selected>select..</option>
<option value="CIS">MS(CIS)</option>
<option value="CS">MS(CS)</option>
<option value="UG">UG</option>
</select></td>
</tr>

<tr>
<td>Graduation Year</td>
<td><select name="year" id="year">
<option value="-1" selected>select..</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
</select></td>
</tr>

<tr>
<td>Country</td>
<td>
<select name="countryname" id="countryname">
	<option value="-1" selected>select..</option>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="Antarctica">Antarctica</option>
	<option value="Argentina">Argentina</option>
	<option value="Australia">Australia</option>
	<option value="Bahamas">Bahamas</option>
	<option value="Bahrain">Bahrain</option>
	<option value="Bangladesh">Bangladesh</option>
	<option value="Belgium">Belgium</option>
	<option value="Bermuda">Bermuda</option>
	<option value="Bhutan">Bhutan</option>
	<option value="Brazil">Brazil</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Chile">Chile</option>
	<option value="China">China</option>
	<option value="Colombia">Colombia</option>
	<option value="Cuba">Cuba</option>
	<option value="Denmark">Denmark</option>
	<option value="Egypt">Egypt</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
	<option value="Georgia">Georgia</option>
	<option value="Germany">Germany</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Haiti">Haiti</option>
	<option value="HongKong">HongKong</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran">Iran</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Korea">Korea</option>
	<option value="Kuwait">Kuwait</option>
	<option value="Lebanon">Lebanon</option>
	<option value="Libya">Libya</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Maldives">Maldives</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mexico">Mexico</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Myanmar">Myanmar</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherlands">Netherlands</option>
	<option value="NewZealand">New Zealand</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Peru">Peru</option>
	<option value="Philippines">Philippines</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Qatar">Qatar</option>
	<option value="Somalia">Somalia</option>
	<option value="SouthAfrica">South Africa</option>
	<option value="Spain">Spain</option>
	<option value="SriLanka">Sri Lanka</option>
	<option value="Sudan">Sudan</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Turkey">Turkey</option>
	<option value="Ukraine">Ukraine</option>
	<option value="UAE">United Arab Emirates</option>
	<option value="Zimbabwe">Zimbabwe</option>
</select>
</td>
</tr>

<tr>
<td>City</td>
<td><input type="text" name="city" id="city" size="30"></td>
</tr>

<tr>
<td>Personal Address</td>
<td>
<textarea rows="2" cols="50" name="Address" id="Address">
</textarea>
</td>
</tr>

<tr>
<td>Email Address</td>
<td><input type="text" name="emailid" id="emailid" size="30"></td>
</tr>


<tr>
<td>Mobile#</td>
<td><input type="text" name="mobilenumber" id="mobileno" size="30"></td>
</tr>
<tr>
<td></td>
<td colspan="2"><input type="reset">&nbsp&nbsp&nbsp&nbsp<input type="Submit" id="submit" name="submit" value="Submit Form" /></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
</Div>
<footer>
	&copy; Created By Alumni Developers 
</footer>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['stud_name'];
$number=$_POST['student700'];
$passw=$_POST['password'];
$sex=$_POST['sex'];
$course=$_POST['Course'];
$gradyear=$_POST['year'];
$country_name=$_POST['countryname'];
$scity=$_POST['city'];
$paddress=$_POST['Address'];
$email=$_POST['emailid'];
$mbile=$_POST['mobilenumber'];
echo $mbile;
$dbc=mysqli_connect('localhost','harish','1234','test') or die("wrong");
$query="insert into st_login_table values('$name',$number,'$passw','$sex','$course',$gradyear,'$country_name','$scity','$paddress','$email',$mbile)";

$result=mysqli_query($dbc,$query) or die ("mysql_error");

mysqli_close($dbc);
}
?>