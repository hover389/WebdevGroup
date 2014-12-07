<!DOCTYPE html>

<html>
<head>
	<link href="deleteMember.css" type="text/css" rel="stylesheet"/>
	<title>Delete Member</title>
	<meta charset="UTF-8">
	<meta name= "robots" content="noindex, nofollow"/>
	<script src= "deleteMember.js" type="text/javascript"></script>
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
			$_SESSION['memLevel'] = "superAdmin";
			if(isset($_SESSION['memLevel'])){
				if(strcmp($_SESSION['memLevel'],"superAdmin")===0){
					?>
				<div id = "title">
					<p><span id="spanTitle"> Delete or change member access level</span></p>
				</div>
				
				<div id="infoDiv">
					<br><br>
					<p> Delete Member</p><br>
					Member user name: <input  id="deleteUser"><br><br> 
					<div id="button">
						<input type="submit" name="submitButton1" onclick="deleteMember()" value="submit"/> <br/>
						<p id="memStatus"></p>
					</div>
					</p> Change member access level</p>
					Member user name: <input  id="levelUser"><br><br> 
					<p>Select level of access</p>
					<select>
					  <option value="member" name="choice">Member</option>
					  <option value="admin" name="choice">Admin</option>
					  <option value="superAdmin" name="choice">Super Admin</option>
					</select> 
					<div id="button">
						<input type="submit" name="submitButton2" onclick="levelChange()" value="submit"/> <br/>
						<p id="levelStatus"></p>
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