<!DOCTYPE html>

<html>
<head>
	<link href="addEvents.css" type="text/css" rel="stylesheet"/>
	<title>Event Sign Up</title>
	<meta charset="UTF-8">
	<meta name= "robots" content="noindex, nofollow"/>
	<script src= "addEvents.js" type="text/javascript"></script>
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
						<td class="cell"> <a id="signUp" href="signUp.php">Member Sign Up </a> </td>
						<td class="cell"> <a id="events" href="eventCalendar.php">Events </a> </td>
						<td class="cell"> <a id="videos" href="videos.html">Videos</a> </td>
						<td class="cell"> <a id="photos" href="editMember.php">Profile </a> </td>
						<td class="cell"> <a id="directory" href="memberDirectory.php">Member Directory </a> </td>
						<td class="cell" id="login">
							<?php
							if(isset($_SESSION['memLevel'])){
							?>
								<a id="login" href="logout.php">Log Out </a>
							<?php
							}
							else{
							?>
								<a id="login" href="login.php">Log In </a>
							<?php
							}
						?>
						</td>
					</tr>
				</table>
		</div>
		<div id = "container">
			<?php
			if(isset($_SESSION['memLevel'])){
				if(strcmp($_SESSION['memLevel'],"admin")===0||strcmp($_SESSION['memLevel'],"superAdmin")===0){
					?>
				<div id = "title">
					<p><span id="spanTitle"> Add Event</span></p>
				</div>
				
				<div id="infoDiv">
					<br><br>
					Name of event: <input  id="name"><br><br> 
					Date: <input id ="date"><br><br>
					Location: <input id ="loc"><br><br>
					Cost: <input id ="cost"><br><br>
					Who to contact: <input id ="contact"><br><br>
					Description: <textarea rows="5" cols="50" id="desc"></textarea>
				<div id="button">
					<input type="submit" name="submitButton" onclick="addEvent()" value="Add New Event"/> <br/>
					<p id="status"></p>
				</div>
				</div>
				<?php
					
				}
				else{
				?><p id = "error"> you dont have the right privileges to add an event</p>
					<?php
					}
			}
			else{
			?>
				<p id = "error"> please Login</p>
				<?php
			}
					?>
						
			
			
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