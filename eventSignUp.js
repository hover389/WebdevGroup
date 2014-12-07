function eventSignUp(){
	var userName = document.getElementById("sessionId").innerHTML;
	var eventName = document.getElementById("eventName").innerHTML;
	var param = "uid="+ userName.trim() + "&eventName="+eventName.trim();
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
				document.getElementById("signedUp").innerHTML = response;
            }
        }
    }
	ajax.open("POST","eventSignUpCheck.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send(param);
}