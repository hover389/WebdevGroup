<!DOCTYPE html>

<html>
<head>
	<link href="eventSignUp.css" type="text/css" rel="stylesheet"/>
	<title>Event Sign Up</title>
	<meta charset="UTF-8">
	<meta name= "robots" content="noindex, nofollow"/>
	<script src= "eventSignUp.js" type="text/javascript"></script>
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
			<div id = "title">
				<p><span id="spanTitle"> Event Sign Up</span></p>
			</div>
			
			<div id="infoDiv">
					
					
				<?php
					try{
					$db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
					$month = $db->quote($_GET["month"]);
					$day = $db->quote($_GET["day"]);
					$sql = "select * from events where month = ".$month." and dayNumStart = ".$day;

					$result = $db->query($sql);
					
				   $row = $result->fetch();
					?>
					
					
						<p class = "info"><?=  'Name of event: '.$row[0]?></p>
						<p class = "info"><br /><?=  "Date: ".$row[3]." " .$row[4]." - ".$row[5]." 2015"; ?></p>
						<p class = "info"><br /><?=  "Location: ".$row[1]; ?></p>
						<p class = "info"><br /><?=  "Cost: ".$row[2]; ?> </p>
						<p class = "info"><br /><?=  "Who to contact: ".$row[6]; ?> </p>
						<p class = "info"><br /><?=  "Description: ".$row[7]; ?> </p>
					<?php
						if(isset($_SESSION['memLevel'])){
							?><div id="button">
							<input type="submit" onclick="eventSignUp()" name="submitButton" value="Sign up for Event"/> <br/>
							<p id="signedUp"> </p>
							<p hidden id="sessionId"><?php echo $_SESSION["uid"]; ?> </p>
							<p hidden id="eventName"><?php echo $row[0]; ?> </p>
							</div>
						<?php
						}
					}
					catch(PDOException $e)
					{
						echo $sql . "<br>" . $e->getMessage();
					}
					
					?>
					
					
					
			</div>
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