function deleteMember(){
	var name = document.getElementById("deleteUser").value;
	
	var param = "userName="+ name.trim();
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
				document.getElementById("memStatus").innerHTML = response;
            }
        }
    }
	ajax.open("POST","deleteMemberCheck.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send(param);
}

function levelChange(){
	var name = document.getElementById("levelUser").value;
	var level = document.getElementsByName("choice")[0].value;
	var param = "userName="+ name.trim()+" &level= "+level.trim();
	alert(param);
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
				document.getElementById("levelStatus").innerHTML = response;
            }
        }
    }
	ajax.open("POST","levelMemberCheck.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send(param);
}