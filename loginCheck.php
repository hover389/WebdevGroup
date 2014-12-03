<!DOCTYPE html>

<html>
<head>
	<link href="login.css" type="text/css" rel="stylesheet"/>
	<title>Log In</title>
	<meta charset="UTF-8">
	<meta name= "robots" content="noindex, nofollow"/>
</head>
	
	<body>
		<?php
			session_start();
		?>
		<div id="navBar">
				<table id="tableNav">
					<tr>
						<td class="cell"> <a id="home" href="home.php">Home </a> </td>
						<td class="cell"> <a id="benefits" href="benefits.html">Member Benefits </a> </td>
						<td class="cell"> <a id="signUp" href="signUp.html">Member Sign Up </a> </td>
						<td class="cell"> <a id="events" href="eventCalendar.php">Events </a> </td>
						<td class="cell"> <a id="videos" href="videos.html">Videos</a> </td>
						<td class="cell"> <a id="photos" href="photos.html">Photos </a> </td>
						<td class="cell"> <a id="directory" href="memberDirectory.php">Member Directory </a> </td>
						<td class="cell" id="login">
							<?php
							if(isset($_SESSION['uid'])){
							?>
								<a id="loginLink" href="logout.php">Log Out </a>
							<?php
							}
							else{
							?>
								<a id="loginLink" href="login.php">Log In </a>
							<?php
							}
						?>
						</td>
					</tr>
				</table>
			</div>
			
			<div id="footer">
			 <table id="val">
				<tr>
					<td><a href = "http://validator.w3.org/check/referer"> Validate Html</a></td>
					<td><a href = "http://jigsaw.w3.org/css-validator/check/referer"> Validate CSS</a></td>
				</tr>
			 </table>
			<p id="disc"> Disclaimer: This site is under developement by UW-Oshkosh students as a prototype for the organization Hoverclub of America. Nothing on this site should
			be construed in any way as being officially connected with or representative of Hoverclub of America</p>
		</div>
		</body>
</html>		