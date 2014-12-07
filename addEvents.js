function eventSignUp(){
	var name = document.getElementById("name").value;
	var date = document.getElementById("date").value;
	var location = document.getElementById("location").value;
	var cost = document.getElementById("cost").value;
	var contact = document.getElementById("contact").value;
	var desc = document.getElementById("desc").value;
	//date is wrong fix!!
	var param = "userName="+ name.trim() + "&date="+date.trim()+"&location="+location.trim()+"&cost="+cost.trim()+"&contact="+contact.trim() ;
	var ajax;
	if (window.XMLHttpRequest) {
        ajax = new XMLHttpRequest();
    }
    else {
        ajax = new ActiveXObject("Msxml2.XMLHTTP");
    }
	ajax.onreadystatechange = function () {
        if (ajax.readyState === 4) {
            if (ajax.status == 200 && ajax.status < 300) {
               var response = ajax.responseText;
				document.getElementById("status").innerHTML = response;
            }
        }
    }
	ajax.open("POST","addEventCheck.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send(param);
}