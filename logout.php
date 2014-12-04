
<!DOCTYPE html>

<html>
<head>
	<title>logout</title>
	<meta charset="UTF-8">
	<meta name= "robots" content="noindex, nofollow"/>
	<script src= "logout.js" type="text/javascript"></script>
</head>
	
	<body onload = "logout()">
<?php
	session_start();
	session_destroy();
?>
	
