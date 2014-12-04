

function checkValid(){
	var userName = document.getElementById("uid").value;
	var password = document.getElementById("password").value;
	var param = "uid="+ userName + "&password="+ password;
	//var param = "fname=Henry";
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
				if(response.trim()==="success"){
					window.location.replace("home.php");
				}
				else if(response.trim()==="user name not valid"){
					document.getElementById("error").innerHTML = "user name not valid";
				}
				else{
					document.getElementById("error").innerHTML = "password is not valid";
				}
            }
        }
    }
	ajax.open("POST","loginCheck.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send(param);
}
