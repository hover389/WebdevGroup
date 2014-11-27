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
	
		<div id="navBar">
				<table id="tableNav">
					<tr>
						<td class="cell"> <a id="home" href="home.html">Home </a> </td>
						<td class="cell"> <a id="benefits" href="benefits.html">Member Benefits </a> </td>
						<td class="cell"> <a id="signUp" href="signUp.html">Member Sign Up </a> </td>
						<td class="cell"> <a id="events" href="eventCalendar.html">Events </a> </td>
						<td class="cell"> <a id="videos" href="videos.html">Videos</a> </td>
						<td class="cell"> <a id="photos" href="photos.html">Photos </a> </td>
						<td class="cell"> <a id="directory" href="memberDirectory.php">Member Directory </a> </td>
						<td class="cell" id="login"> MemberLogin drop down </td>
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
						<td class="calCell">1</td>
						<td class="calCell">2</td>
						<td class="calCell">3</td>
						<td class="calCell">4</td>
					</tr>
					<tr>
						<td class="calCell">5</td>
						<td class="calCell">6</td>
						<td class="calCell">7</td>
						<td class="calCell">8</td>
						<td class="calCell">9</td>
						<td class="calCell"><?php $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
							$sql = "select name,month,dayNumStart from events where month = 'April' and dayNumStart = '10' or dayNumEnd='10'";
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
							$sql = "select name,month,dayNumStart from events where month = 'April' and dayNumStart = '11' or dayNumEnd='11'";
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
						<td class="calCell"><a class="event" href="eventSignUp.php?month=April&day=11"><div class="celDiv"><span class="numMonth">12</span> <p class="eventName">Havasu Hoverfest</p></div></a></td>
						<td class="calCell">13</td>
						<td class="calCell">14</td>
						<td class="calCell">15</td>
						<td class="calCell">16</td>
						<td class="calCell"><a class="event" href="eventSignUp.php"><div class="celDiv"><span class="numMonth">17</span> <p class="eventName">Florida Cruise</p></div></a></td>
						<td class="calCell"><a class="event" href="eventSignUp.php"><div class="celDiv"><span class="numMonth">18</span> <p class="eventName">Florida Cruise</p></div></a></td>
					</tr>
					<tr>
						<td class="calCell"><a class="event" href="eventSignUp.php"><div class="celDiv"><span class="numMonth">19</span> <p class="eventName">Florida Cruise</p></div></a></td>
						<td class="calCell">20</td>
						<td class="calCell">21</td>
						<td class="calCell">22</td>
						<td class="calCell">23</td>
						<td class="calCell">24</td>
						<td class="calCell">25</td>
					</tr>
					<tr>
						<td class="calCell">26</td>
						<td class="calCell">27</td>
						<td class="calCell">28</td>
						<td class="calCell">29</td>
						<td class="calCell">30</td>
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
						<td class="calCell">1</td>
						<td class="calCell">2</td>
						<td class="calCell">3</td>
						<td class="calCell">4</td>
						<td class="calCell">5</td>
						<td class="calCell">6</td>
					</tr>
					<tr>
						<td class="calCell">7</td>
						<td class="calCell">8</td>
						<td class="calCell">9</td>
						<td class="calCell">10</td>
						<td class="calCell">11</td>
						<td class="calCell">12</td>
						<td class="calCell"><a class="event" href="eventSignUp.php"><div class="celDiv"><span class="numMonth">13</span> <p class="eventName">Muscoda Spring Hover In</p></div></a></td>
					</tr>
					<tr>
						<td class="calCell"><a class="event" href="eventSignUp.php"><div class="celDiv"><span class="numMonth">14</span> <p class="eventName">Muscoda Spring Hover In</p></div></a></td>
						<td class="calCell">15</td>
						<td class="calCell">16</td>
						<td class="calCell">17</td>
						<td class="calCell">18</td>
						<td class="calCell">19</td>
						<td class="calCell">20</td>
					</tr>
					<tr>
						<td class="calCell">21</td>
						<td class="calCell">22</td>
						<td class="calCell">23</td>
						<td class="calCell">24</td>
						<td class="calCell">25</td>
						<td class="calCell">26</td>
						<td class="calCell">27</td>
					</tr>
					<tr>
						<td class="calCell">28</td>
						<td class="calCell">29</td>
						<td class="calCell">30</td>
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
						<td class="calCell">1</td>
						<td class="calCell">2</td>
						<td class="calCell">3</td>
						<td class="calCell">4</td>
					</tr>
					<tr>
						<td class="calCell">5</td>
						<td class="calCell">6</td>
						<td class="calCell">7</td>
						<td class="calCell"><a class="event" href="eventSignUp.php"><div class="celDiv"><span class="numMonth">8</span> <p class="eventName">Pendelton Memorial Muscoda Hover In</p></div></a></td>
						<td class="calCell"><a class="event" href="eventSignUp.php"><div class="celDiv"><span class="numMonth">9</span> <p class="eventName">Pendelton Memorial Muscoda Hover In</p></div></a></td>
						<td class="calCell">10</td>
						<td class="calCell">11</td>
					</tr>
					<tr>
						<td class="calCell">12</td>
						<td class="calCell">13</td>
						<td class="calCell">14</td>
						<td class="calCell">15</td>
						<td class="calCell">16</td>
						<td class="calCell">17</td>
						<td class="calCell">18</td>
					</tr>
					<tr>
						<td class="calCell">19</td>
						<td class="calCell">20</td>
						<td class="calCell">21</td>
						<td class="calCell">22</td>
						<td class="calCell">23</td>
						<td class="calCell">24</td>
						<td class="calCell">25</td>
					</tr>
					<tr>
						<td class="calCell">26</td>
						<td class="calCell">27</td>
						<td class="calCell">28</td>
						<td class="calCell">29</td>
						<td class="calCell">30</td>
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
						<td class="calCell"></td>
						<td class="calCell">1</td>
						<td class="calCell">2</td>
						<td class="calCell">3</td>
						<td class="calCell"><a class="event" href="eventSignUp.php"><div class="celDiv"><span class="numMonth">4</span> <p class="eventName">Muscatine Iowa Cruise</p></div></a></td>
					</tr>
					<tr>
						<td class="calCell"><a class="event" href="eventSignUp.php"><div class="celDiv"><span class="numMonth">5</span> <p class="eventName">Muscatine Iowa Cruise</p></div></a></td>
						<td class="calCell"><a class="event" href="eventSignUp.php"><div class="celDiv"><span class="numMonth">6</span> <p class="eventName">Muscatine Iowa Cruise</p></div></a></td>
						<td class="calCell">7</td>
						<td class="calCell">8</td>
						<td class="calCell">9</td>
						<td class="calCell">10</td>
						<td class="calCell">11</td>
					</tr>
					<tr>
						<td class="calCell">12</td>
						<td class="calCell">13</td>
						<td class="calCell">14</td>
						<td class="calCell">15</td>
						<td class="calCell">16</td>
						<td class="calCell">17</td>
						<td class="calCell">18</td>
					</tr>
					<tr>
						<td class="calCell">19</td>
						<td class="calCell">20</td>
						<td class="calCell">21</td>
						<td class="calCell">22</td>
						<td class="calCell">23</td>
						<td class="calCell">24</td>
						<td class="calCell">25</td>
					</tr>
					<tr>
						<td class="calCell">26</td>
						<td class="calCell">27</td>
						<td class="calCell">28</td>
						<td class="calCell">29</td>
						<td class="calCell">30</td>
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
						<td class="calCell">1</td>
						<td class="calCell">2</td>
						<td class="calCell"><a class="event" href="eventSignUp.php"><div class="celDiv"><span class="numMonth">3</span> <p class="eventName">Whitewater River Cruise, Southern Indiana</p></div></a></td>
						<td class="calCell"><a class="event" href="eventSignUp.php"><div class="celDiv"><span class="numMonth">4</span> <p class="eventName">Whitewater River Cruise, Southern Indiana</p></div></a></td>
					</tr>
					<tr>
						<td class="calCell">5</td>
						<td class="calCell">6</td>
						<td class="calCell">7</td>
						<td class="calCell">8</td>
						<td class="calCell">9</td>
						<td class="calCell">10</td>
						<td class="calCell">11</td>
					</tr>
					<tr>
						<td class="calCell">12</td>
						<td class="calCell">13</td>
						<td class="calCell">14</td>
						<td class="calCell">15</td>
						<td class="calCell">16</td>
						<td class="calCell">17</td>
						<td class="calCell">18</td>
					</tr>
					<tr>
						<td class="calCell">19</td>
						<td class="calCell">20</td>
						<td class="calCell">21</td>
						<td class="calCell">22</td>
						<td class="calCell">23</td>
						<td class="calCell">24</td>
						<td class="calCell">25</td>
					</tr>
					<tr>
						<td class="calCell">26</td>
						<td class="calCell">27</td>
						<td class="calCell">28</td>
						<td class="calCell">29</td>
						<td class="calCell">30</td>
						<td class="calCell"></td>
						<td class="calCell"></td>
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