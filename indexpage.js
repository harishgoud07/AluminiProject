function validate()
{
	var message="";
	
	var username=document.getElementById("student700").value;
	var password=document.getElementById("Password").value;
	
	if(username == null || username == "")
	{
		message=message+"Please Enter Username\n";
		document.getElementById("student700").focus();
	}
	
	
	if(password == null || password == "")
	{
		message=message+"Please Enter Password\n";
		document.getElementById("Password").focus();
	}
	
	
	if(message!='')
	{
		alert(message);
		return false;
	}
	else
	{
		return true;
	}
	
}