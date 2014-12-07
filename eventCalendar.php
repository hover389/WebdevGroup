<!DOCTYPE html>

<html>
<head>
	<link href="eventCalendar.css" type="text/css" rel="stylesheet"/>
	<title>Event Calendar</title>
	<meta charset="UTF-8">
	<meta name= "robots" content="noindex, nofollow"/>
	<script src= "eventCalendar.js" type="text/javascript"></script>
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
				<p><span id="spanTitle"> Upcoming Events Calendar</span></p>
		</div>
			<div id="calDiv">
			<p class="month"><span class="spanMonth">April 2015</span></p>
				<table class="calTable">
					<tr>
						<th>Sunday</th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
						<th>Saturday</th>
					</tr>
					<tr>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '1' or dayNumEnd='1' or (dayNumStart< '1' and dayNumEnd> '1'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>1
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">1</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '2' or dayNumEnd='2' or (dayNumStart< '2' and dayNumEnd> '2'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>2
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">2</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '3' or dayNumEnd='3' or (dayNumStart< '3' and dayNumEnd> '3'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>3
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">3</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '4' or dayNumEnd='4' or (dayNumStart< '4' and dayNumEnd> '4'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>4
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">4</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '5' or dayNumEnd='5' or (dayNumStart< '5' and dayNumEnd> '5'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>5
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">5</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '6' or dayNumEnd='6' or (dayNumStart< '6' and dayNumEnd> '6'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>6
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">6</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '7' or dayNumEnd='7' or (dayNumStart< '7' and dayNumEnd> '7'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>7
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">7</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '8' or dayNumEnd='8' or (dayNumStart< '8' and dayNumEnd> '8'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>8
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">8</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '9' or dayNumEnd='9' or (dayNumStart< '9' and dayNumEnd> '9'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>9
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">9</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '10' or dayNumEnd='10' or (dayNumStart< '10' and dayNumEnd> '10'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>10
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">10</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell">
							<?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '11' or dayNumEnd='11' or (dayNumStart< '11' and dayNumEnd> '11'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($result===false){
								?>11
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">11</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?>
						</td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '12' or dayNumEnd='12' or (dayNumStart< '12' and dayNumEnd> '12'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>12
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">12</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '13' or dayNumEnd='13' or (dayNumStart< '13' and dayNumEnd> '13'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>13
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">13</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '14' or dayNumEnd='14' or (dayNumStart< '14' and dayNumEnd> '14'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>14
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">14</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '15' or dayNumEnd='15' or (dayNumStart< '15' and dayNumEnd> '15'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>15
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">15</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '16' or dayNumEnd='16' or (dayNumStart< '16' and dayNumEnd> '16'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>16
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">16</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '17' or dayNumEnd='17' or (dayNumStart< '17' and dayNumEnd> '17'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>17
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">17</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '18' or dayNumEnd='18' or (dayNumStart< '18' and dayNumEnd> '18'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>18
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">18</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '19' or dayNumEnd='19' or (dayNumStart< '19' and dayNumEnd> '19'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>19
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">19</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '20' or dayNumEnd='20' or (dayNumStart< '20' and dayNumEnd> '20'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>20
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">20</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '21' or dayNumEnd='21' or (dayNumStart< '21' and dayNumEnd> '21'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>21
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">21</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '22' or dayNumEnd='22' or (dayNumStart< '22' and dayNumEnd> '22'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>22
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">22</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '23' or dayNumEnd='23' or (dayNumStart< '23' and dayNumEnd> '23'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>23
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">23</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '24' or dayNumEnd='24' or (dayNumStart< '24' and dayNumEnd> '24'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>24
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">24</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '25' or dayNumEnd='25' or (dayNumStart< '25' and dayNumEnd> '25'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>25
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">25</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '26' or dayNumEnd='26' or (dayNumStart< '26' and dayNumEnd> '26'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>26
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">26</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '27' or dayNumEnd='27' or (dayNumStart< '27' and dayNumEnd> '27'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>27
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">27</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '28' or dayNumEnd='28' or (dayNumStart< '28' and dayNumEnd> '28'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>28
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">28</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '29' or dayNumEnd='29' or (dayNumStart< '29' and dayNumEnd> '29'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>29
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">29</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'April') and (dayNumStart = '30' or dayNumEnd='30' or (dayNumStart< '30' and dayNumEnd> '30'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>30
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">30</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
					</tr>
				</table>
				
				<p class="month"><span class="spanMonth">June 2015</span></p>
				<table class="calTable">
					<tr>
						<th>Sunday</th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
						<th>Saturday</th>
					</tr>
					<tr>
						<td class="calCell"></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '1' or dayNumEnd='1' or (dayNumStart< '1' and dayNumEnd> '1'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>1
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">1</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '2' or dayNumEnd='2' or (dayNumStart< '2' and dayNumEnd> '2'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>2
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">2</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '3' or dayNumEnd='3' or (dayNumStart< '3' and dayNumEnd> '3'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>3
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">3</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '4' or dayNumEnd='4' or (dayNumStart< '4' and dayNumEnd> '4'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>4
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">4</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '5' or dayNumEnd='5' or (dayNumStart< '5' and dayNumEnd> '5'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>5
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">5</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '6' or dayNumEnd='6' or (dayNumStart< '6' and dayNumEnd> '6'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>6
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">6</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '7' or dayNumEnd='7' or (dayNumStart< '7' and dayNumEnd> '7'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>7
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">7</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '8' or dayNumEnd='8' or (dayNumStart< '8' and dayNumEnd> '8'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>8
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">8</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '9' or dayNumEnd='9' or (dayNumStart< '9' and dayNumEnd> '9'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>9
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">9</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '10' or dayNumEnd='10' or (dayNumStart< '10' and dayNumEnd> '10'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>10
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">10</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '11' or dayNumEnd='11' or (dayNumStart< '11' and dayNumEnd> '11'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>11
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">11</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '12' or dayNumEnd='12' or (dayNumStart< '12' and dayNumEnd> '12'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>12
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">12</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '13' or dayNumEnd='13' or (dayNumStart< '13' and dayNumEnd> '13'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>13
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">13</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '14' or dayNumEnd='14' or (dayNumStart< '14' and dayNumEnd> '14'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>14
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">14</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '15' or dayNumEnd='15' or (dayNumStart< '15' and dayNumEnd> '15'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>15
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">15</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '16' or dayNumEnd='16' or (dayNumStart< '16' and dayNumEnd> '16'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>16
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">16</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '17' or dayNumEnd='17' or (dayNumStart< '17' and dayNumEnd> '17'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>17
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">17</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '18' or dayNumEnd='18' or (dayNumStart< '18' and dayNumEnd> '18'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>18
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">18</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '19' or dayNumEnd='19' or (dayNumStart< '19' and dayNumEnd> '19'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>19
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">19</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '20' or dayNumEnd='20' or (dayNumStart< '20' and dayNumEnd> '20'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>20
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">20</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '21' or dayNumEnd='21' or (dayNumStart< '21' and dayNumEnd> '21'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>21
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">21</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '22' or dayNumEnd='22' or (dayNumStart< '22' and dayNumEnd> '22'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>22
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">22</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '23' or dayNumEnd='23' or (dayNumStart< '23' and dayNumEnd> '23'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>23
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">23</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '24' or dayNumEnd='24' or (dayNumStart< '24' and dayNumEnd> '24'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>24
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">24</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '25' or dayNumEnd='25' or (dayNumStart< '25' and dayNumEnd> '25'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>25
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">25</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '26' or dayNumEnd='26' or (dayNumStart< '26' and dayNumEnd> '26'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>26
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">26</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '27' or dayNumEnd='27' or (dayNumStart< '27' and dayNumEnd> '27'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>27
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">27</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '28' or dayNumEnd='28' or (dayNumStart< '28' and dayNumEnd> '28'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>28
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">28</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '29' or dayNumEnd='29' or (dayNumStart< '29' and dayNumEnd> '29'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>29
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">29</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'June') and (dayNumStart = '30' or dayNumEnd='30' or (dayNumStart< '30' and dayNumEnd> '30'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>30
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">30</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
					</tr>
				</table>
				
				<p class="month"><span class="spanMonth">August 2015</span></p>
				<table class="calTable">
					<tr>
						<th>Sunday</th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
						<th>Saturday</th>
					</tr>
					<tr>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '1' or dayNumEnd='1' or (dayNumStart< '1' and dayNumEnd> '1'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>1
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">1</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '2' or dayNumEnd='2' or (dayNumStart< '2' and dayNumEnd> '2'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>2
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">2</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '3' or dayNumEnd='3' or (dayNumStart< '3' and dayNumEnd> '3'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>3
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">3</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '4' or dayNumEnd='4' or (dayNumStart< '4' and dayNumEnd> '4'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>4
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">4</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '5' or dayNumEnd='5' or (dayNumStart< '5' and dayNumEnd> '5'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>5
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">5</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '6' or dayNumEnd='6' or (dayNumStart< '6' and dayNumEnd> '6'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>6
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">6</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '7' or dayNumEnd='7' or (dayNumStart< '7' and dayNumEnd> '7'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>7
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">7</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '8' or dayNumEnd='8' or (dayNumStart< '8' and dayNumEnd> '8'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>8
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">8</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '9' or dayNumEnd='9' or (dayNumStart< '9' and dayNumEnd> '9'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>9
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">9</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '10' or dayNumEnd='10' or (dayNumStart< '10' and dayNumEnd> '10'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>10
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">10</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '11' or dayNumEnd='11' or (dayNumStart< '11' and dayNumEnd> '11'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>11
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">11</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '12' or dayNumEnd='12' or (dayNumStart< '12' and dayNumEnd> '12'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>12
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">12</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '13' or dayNumEnd='13' or (dayNumStart< '13' and dayNumEnd> '13'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>13
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">13</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '14' or dayNumEnd='14' or (dayNumStart< '14' and dayNumEnd> '14'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>14
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">14</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '15' or dayNumEnd='15' or (dayNumStart< '15' and dayNumEnd> '15'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>15
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">15</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>		
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '16' or dayNumEnd='16' or (dayNumStart< '16' and dayNumEnd> '16'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>16
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">16</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '17' or dayNumEnd='17' or (dayNumStart< '17' and dayNumEnd> '17'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>17
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">17</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '18' or dayNumEnd='18' or (dayNumStart< '18' and dayNumEnd> '18'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>18
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">18</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '19' or dayNumEnd='19' or (dayNumStart< '19' and dayNumEnd> '19'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>19
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">19</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '20' or dayNumEnd='20' or (dayNumStart< '20' and dayNumEnd> '20'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>20
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">20</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '21' or dayNumEnd='21' or (dayNumStart< '21' and dayNumEnd> '21'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>21
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">21</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '22' or dayNumEnd='22' or (dayNumStart< '22' and dayNumEnd> '22'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>22
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">22</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '23' or dayNumEnd='23' or (dayNumStart< '23' and dayNumEnd> '23'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>23
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">23</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '24' or dayNumEnd='24' or (dayNumStart< '24' and dayNumEnd> '24'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>24
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">24</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '25' or dayNumEnd='25' or (dayNumStart< '25' and dayNumEnd> '25'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>25
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">25</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '26' or dayNumEnd='26' or (dayNumStart< '26' and dayNumEnd> '26'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>26
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">26</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '27' or dayNumEnd='27' or (dayNumStart< '27' and dayNumEnd> '27'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>27
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">27</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '28' or dayNumEnd='28' or (dayNumStart< '28' and dayNumEnd> '28'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>28
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">28</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '29' or dayNumEnd='29' or (dayNumStart< '29' and dayNumEnd> '29'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>29
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">29</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '30' or dayNumEnd='30' or (dayNumStart< '30' and dayNumEnd> '30'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>30
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">30</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'August') and (dayNumStart = '31' or dayNumEnd='31' or (dayNumStart< '31' and dayNumEnd> '31'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>31
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">31</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
					</tr>
				</table>
				
				<p class="month"><span class="spanMonth">September 2015</span></p>
				<table class="calTable">
					<tr>
						<th>Sunday</th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
						<th>Saturday</th>
					</tr>
					<tr>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '1' or dayNumEnd='1' or (dayNumStart< '1' and dayNumEnd> '1'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>1
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">1</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '2' or dayNumEnd='2' or (dayNumStart< '2' and dayNumEnd> '2'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>2
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">2</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '3' or dayNumEnd='3' or (dayNumStart< '3' and dayNumEnd> '3'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>3
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">3</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '4' or dayNumEnd='4' or (dayNumStart< '4' and dayNumEnd> '4'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>4
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">4</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '5' or dayNumEnd='5' or (dayNumStart< '5' and dayNumEnd> '5'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>5
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">5</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '6' or dayNumEnd='6' or (dayNumStart< '6' and dayNumEnd> '6'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>6
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">6</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '7' or dayNumEnd='7' or (dayNumStart< '7' and dayNumEnd> '7'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>7
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">7</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '8' or dayNumEnd='8' or (dayNumStart< '8' and dayNumEnd> '8'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>8
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">8</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '9' or dayNumEnd='9' or (dayNumStart< '9' and dayNumEnd> '9'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>9
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">9</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '10' or dayNumEnd='10' or (dayNumStart< '10' and dayNumEnd> '10'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>10
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">10</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '11' or dayNumEnd='11' or (dayNumStart< '11' and dayNumEnd> '11'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>11
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">11</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '12' or dayNumEnd='12' or (dayNumStart< '12' and dayNumEnd> '12'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>12
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">12</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '13' or dayNumEnd='13' or (dayNumStart< '13' and dayNumEnd> '13'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>13
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">13</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '14' or dayNumEnd='14' or (dayNumStart< '14' and dayNumEnd> '14'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>14
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">14</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '15' or dayNumEnd='15' or (dayNumStart< '15' and dayNumEnd> '15'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>15
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">15</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>		
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '16' or dayNumEnd='16' or (dayNumStart< '16' and dayNumEnd> '16'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>16
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">16</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '17' or dayNumEnd='17' or (dayNumStart< '17' and dayNumEnd> '17'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>17
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">17</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '18' or dayNumEnd='18' or (dayNumStart< '18' and dayNumEnd> '18'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>18
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">18</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '19' or dayNumEnd='19' or (dayNumStart< '19' and dayNumEnd> '19'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>19
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">19</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '20' or dayNumEnd='20' or (dayNumStart< '20' and dayNumEnd> '20'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>20
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">20</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '21' or dayNumEnd='21' or (dayNumStart< '21' and dayNumEnd> '21'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>21
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">21</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '22' or dayNumEnd='22' or (dayNumStart< '22' and dayNumEnd> '22'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>22
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">22</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '23' or dayNumEnd='23' or (dayNumStart< '23' and dayNumEnd> '23'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>23
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">23</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '24' or dayNumEnd='24' or (dayNumStart< '24' and dayNumEnd> '24'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>24
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">24</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '25' or dayNumEnd='25' or (dayNumStart< '25' and dayNumEnd> '25'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>25
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">25</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '26' or dayNumEnd='26' or (dayNumStart< '26' and dayNumEnd> '26'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>26
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">26</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '27' or dayNumEnd='27' or (dayNumStart< '27' and dayNumEnd> '27'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>27
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">27</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '28' or dayNumEnd='28' or (dayNumStart< '28' and dayNumEnd> '28'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>28
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">28</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '29' or dayNumEnd='29' or (dayNumStart< '29' and dayNumEnd> '29'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>29
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">29</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'September') and (dayNumStart = '30' or dayNumEnd='30' or (dayNumStart< '30' and dayNumEnd> '30'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>30
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">30</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
					</tr>
				</table>
				
				<p class="month"><span class="spanMonth">October 2015</span></p>
				<table class="calTable">
					<tr>
						<th>Sunday</th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
						<th>Saturday</th>
					</tr>
					<tr>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '1' or dayNumEnd='1' or (dayNumStart< '1' and dayNumEnd> '1'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>1
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">1</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '2' or dayNumEnd='2' or (dayNumStart< '2' and dayNumEnd> '2'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>2
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">2</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '3' or dayNumEnd='3' or (dayNumStart< '3' and dayNumEnd> '3'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>3
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">3</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '4' or dayNumEnd='4' or (dayNumStart< '4' and dayNumEnd> '4'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>4
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">4</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '5' or dayNumEnd='5' or (dayNumStart< '5' and dayNumEnd> '5'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>5
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">5</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '6' or dayNumEnd='6' or (dayNumStart< '6' and dayNumEnd> '6'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>6
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">6</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '7' or dayNumEnd='7' or (dayNumStart< '7' and dayNumEnd> '7'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>7
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">7</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '8' or dayNumEnd='8' or (dayNumStart< '8' and dayNumEnd> '8'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>8
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">8</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '9' or dayNumEnd='9' or (dayNumStart< '9' and dayNumEnd> '9'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>9
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">9</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '10' or dayNumEnd='10' or (dayNumStart< '10' and dayNumEnd> '10'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>10
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">10</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '11' or dayNumEnd='11' or (dayNumStart< '11' and dayNumEnd> '11'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>11
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">11</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '12' or dayNumEnd='12' or (dayNumStart< '12' and dayNumEnd> '12'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>12
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">12</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '13' or dayNumEnd='13' or (dayNumStart< '13' and dayNumEnd> '13'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>13
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">13</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '14' or dayNumEnd='14' or (dayNumStart< '14' and dayNumEnd> '14'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>14
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">14</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '15' or dayNumEnd='15' or (dayNumStart< '15' and dayNumEnd> '15'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>15
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">15</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>		
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '16' or dayNumEnd='16' or (dayNumStart< '16' and dayNumEnd> '16'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>16
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">16</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '17' or dayNumEnd='17' or (dayNumStart< '17' and dayNumEnd> '17'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>17
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">17</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '18' or dayNumEnd='18' or (dayNumStart< '18' and dayNumEnd> '18'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>18
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">18</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '19' or dayNumEnd='19' or (dayNumStart< '19' and dayNumEnd> '19'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>19
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">19</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '20' or dayNumEnd='20' or (dayNumStart< '20' and dayNumEnd> '20'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>20
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">20</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '21' or dayNumEnd='21' or (dayNumStart< '21' and dayNumEnd> '21'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>21
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">21</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '22' or dayNumEnd='22' or (dayNumStart< '22' and dayNumEnd> '22'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>22
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">22</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '23' or dayNumEnd='23' or (dayNumStart< '23' and dayNumEnd> '23'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>23
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">23</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '24' or dayNumEnd='24' or (dayNumStart< '24' and dayNumEnd> '24'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>24
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">24</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
					<tr>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '25' or dayNumEnd='25' or (dayNumStart< '25' and dayNumEnd> '25'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>25
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">25</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '26' or dayNumEnd='26' or (dayNumStart< '26' and dayNumEnd> '26'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>26
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">26</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '27' or dayNumEnd='27' or (dayNumStart< '27' and dayNumEnd> '27'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>27
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">27</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '28' or dayNumEnd='28' or (dayNumStart< '28' and dayNumEnd> '28'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>28
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">28</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '29' or dayNumEnd='29' or (dayNumStart< '29' and dayNumEnd> '29'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>29
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">29</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '30' or dayNumEnd='30' or (dayNumStart< '30' and dayNumEnd> '30'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>30
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">30</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where (month = 'October') and (dayNumStart = '31' or dayNumEnd='31' or (dayNumStart< '31' and dayNumEnd> '31'))";
							$result = $db->query($sql);
							$row = $result->fetch();
							if($row===false){
								?>31
							<?php }
							else{
								?><a class="event" href="eventSignUp.php?month=<?= $row[1]?>&day=<?= $row[2]?>"><div class="celDiv"><span class="numMonth">31</span> <p class="eventName"><?= $row[0]?></p></div></a><?php
							}
							?></td>
					</tr>
				</table>
				
				
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