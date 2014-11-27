<!DOCTYPE html>

<html>
<head>
	<link href="eventSignUp.css" type="text/css" rel="stylesheet"/>
	<title>Event Sign Up</title>
	<meta charset="UTF-8">
	<meta name= "robots" content="noindex, nofollow"/>
</head>
	
	<body>
		<div id="navBar">
				<table id="tableNav">
					<tr>
						<td class="cell"> <a id="home" href="home.html">Home </a> </td>
						<td class="cell"> <a id="benefits" href="benefits.html">Member Benefits </a> </td>
						<td class="cell"> <a id="signUp" href="signUp.html">Member Sign Up </a> </td>
						<td class="cell"> <a id="events" href="eventCalendar.php">Events </a> </td>
						<td class="cell"> <a id="videos" href="videos.html">Videos</a> </td>
						<td class="cell"> <a id="photos" href="photos.html">Photos </a> </td>
						<td class="cell"> <a id="directory" href="memberDirectory.php">Member Directory </a> </td>
						<td class="cell" id="login"> MemberLogin drop down </td>
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
					}
					catch(PDOException $e)
					{
						echo $sql . "<br>" . $e->getMessage();
					}
					?>
					<div id="button">
					<input type="submit" name="submitButton" value="Sign up for Event"/> <br/>
					</div>
			</div>
		</div>
	</body>
	
</html>