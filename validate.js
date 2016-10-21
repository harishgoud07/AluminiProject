function validate(){
	var error="";
	//Regular Expressions
	var nameRegExp=/^[a-z A-Z]*$/;
	var studentIDRegExp=/^[7][0][0][0-9]*$/;
	var studentPasswordRegExp=/^[a-zA-Z0-9!@#$%^&*<>?]{4,16}$/;
	var cityRegExp=/^[a-z A-Z]*$/;
	var addressRegExp=/^[a-zA-Z0-9\,\.\-\/\s]*$/;
	var emailRegExp=/^[a-z A-Z 0-9\.]*$/;
	var dot,at;
	var mobileRegExp=/^[0-9]*$/;
	//Retrieving ID's
	var name=document.getElementById("stud_name");
	var studentID=document.getElementById("student700");
	var studentPassword=document.getElementById("password");
	var gender=document.getElementsByName("sex");
	var course=document.getElementById("Course");
	var gradYear=document.getElementById("year");
	var country=document.getElementById("countryname");
	var city=document.getElementById("city");
	var address=document.getElementById("Address");
	var email=document.getElementById("emailid");
	var mobile=document.getElementById("mobileno");
	if(name.value=="" && studentID.value=="" && studentPassword.value=="" && course.value=="-1" && gradYear.value=="-1" && country.value=="-1" && city.value=="" && address.value=="" && email.value=="" && mobile.value==""){
		name.style.background="yellow";
		studentID.style.background="yellow";
		studentPassword.style.background="yellow";
		course.style.background="yellow";
		gradYear.style.background="yellow";
		country.style.background="yellow";
		city.style.background="yellow";
		address.style.background="yellow";
		email.style.background="yellow";
		mobile.style.background="yellow";
		
	}
	//Name validation
	if(name.value==""){
		error+="Name cannot be empty\n";
		name.style.background="yellow";
	}
	else if(!nameRegExp.test(name.value)){
		error+="Name Cannot contain numbers\n";
		name.style.background="yellow";
	}
	//Student ID Validation
	if(studentID.value==""){
		error+="Student ID Value cannot be empty\n";
		studentID.style.background="yellow";
	}
	else if(studentID.value.length!=9){
		error+="Student Id should be 9 digits\n";
		studentID.style.background="yellow";
	}
	else if(!studentIDRegExp.test(studentID.value)){
		error+="Student ID Starts with 700******\n";
		studentID.style.background="yellow";
	}
	//Password validation
	if(studentPassword.value==""){
		error+="Password cannot be empty\n";
		studentPassword.style.background="yellow";
	}
	else if(!studentPasswordRegExp.test(studentPassword.value)){
		error+="password should be of length from 8 to 16. It should contain atleast one special character,one upper case letter, one lower case letter, one number";
		studentPassword.style.background="yellow";
	}

	//Gender Validation
	if(gender[0].checked==false && gender[1].checked==false){
		error+="Please select gender\n";
	}
	//Course Validation
	if(course.value=="-1"){
		error+="Please select a course\n";
	}
	//grad year validation
	if(gradYear.value=="-1"){
		error+="Please select the graduation year\n";
	}
	
	//country validation
	if(country.value=="-1"){
		error+="Please select your Country\n";
	}
	
	//city validation
	if(city.value==""){
		city.style.background="yellow";
		error+="Please enter the city name\n";
	}
	else if(!cityRegExp.test(city.value)){
		city.style.background="yellow";
		error+="city name can only contain the characters\n";
	}
	
	//address validation
	if(address.value==""){
		address.style.background="yellow";
		error+="please enter the address \n";
	}
	else if(!addressRegExp.test(address.value)){
		address.style.background="yellow";
		error+="address cannot contain illegal characters \n";
	}
	
	//Email Validation
	if(email.value==""){
		email.style.background="yellow";
		error+="Email ID Field is empty\n";
	}
	else{
		at=email.value.indexOf("@");
		dot=email.value.lastIndexOf(".");
		
		if(at<1 || dot-at<2)
		{
			email.style.background="yellow";
			error+="email id is wrongly entered\n";
		}
	}
	//Mobile number validaiton
	if(mobile.value==""){
		mobile.style.background="yellow";
		error+="Mobile Number is empty\n";
	}
	else if(!mobileRegExp.test(mobile.value)){
		mobile.style.background="yellow";
		error+="Mobile Number Cannot contain illegal characters\n";
	}
	else if(mobile.value.length!=10){
		mobile.style.background="yellow";
		error+="Mobile number can only contain 10 digits\n";
	}
	if(error!="")
	{alert(error);
	return false;
	}
	else
	{
		return true;
	}
}