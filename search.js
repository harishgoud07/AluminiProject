function start(){
	var x=document.getElementById("Name").value.trim();
	if (x !="") {
		return true;
    }
	else{
		document.getElementById("errordisplay").innerHTML="Enter Valid Name";
		Name.style.background="yellow";
		document.getElementById("Name").focus();
		return false;
	}
}
