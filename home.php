<!DOCTYPE html>

<html>
<head>
	<link href="home.css" type="text/css" rel="stylesheet"/>
	<title>HomePage</title>
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
			
			
			<div id="title">
				<span id="spanTitle">HoverclubofAmerica</span>
			</div>
			
			<div id="picDiv">
				<img id="mainPic" src="mainPic.jpg" alt="picture" />
			</div>
			
			<div id="welcome">
				<p ><span id="welcomeTitle">Welcome to the Hoverclub of America site</span></p>
				<p>We are America's Leader in Recreational Hovercrafting.  This site will help keep you connected with
				hovercrafters around the USA and the world. We are more than just a website and a newsletter - our members 
				cruise our nations waterways.  Our members race.  Our members build fully functional hovercrafts.  Our members
				give demonstrations to schools, and much more!  We encourage you to join our club and experience all of the many
				opportunities to enjoy hovercrafting.  Our website and is full of resources.			
				Our forums allow members to communicate ideas and get assistance.  Create your own photo pages, have a build diary or submit your favorite
				video for posting. Want to find a member near you?  You can check out the membership directory to contact someone in your area. 
				If you have any questions or concerns please Contact Us. For more information about hovercraft try these links! 
				<a href = "http://www.hovercraft.com"> Hovercraft.com</a> or <a href = "http://en.wikipedia.org/wiki/Hovercraft"> Wikipedia </a></p>
			</div>
			
			<div id="pics">
				<table id="tablePics">
					<tr class="cellPics">
						<td class="cellPics"><img class="picSize" src="pic1.jpg" alt="picture" /></td>
						<td class="cellPics"><img class="picSize" src="pic2.jpg" alt="picture" /></td>
						
					</tr>
					<tr class="cellPics">
						<td class="cellPics"><img class="picSize" src="pic3.jpg" alt="picture" /></td>
						<td class="cellPics"><img class="picSize" src="pic4.jpg" alt="picture" /></td>
						
					</tr>
					<tr class="cellPics">
						<td class="cellPics"><img class="picSize" src="pic5.jpg" alt="picture" /></td>
						<td class="cellPics"><img class="picSize" src="pic6.jpg" alt="picture" /></td>
						
					</tr>
					<tr class="cellPics">
						<td class="cellPics"><img class="picSize" src="pic7.jpg" alt="picture" /></td>
						<td class="cellPics"><img class="picSize" src="pic8.jpg" alt="picture" /></td>
						
					</tr>
					<tr class="cellPics">
						<td class="cellPics"><img class="picSize" src="pic9.jpg" alt="picture" /></td>
						<td class="cellPics"><img class="picSize" src="pic10.jpg" alt="picture" /></td>
						
					</tr>		
				</table>
			</div>
			
			<div id="news">
				<p id="newsTitle">Hover News</p>
				<ul id="newsList">
					<li>10/18/14- Last Cruise of the year 
					We have finished the last scheduled cruise for 2014 and want to thank 
					all of the organizers and participants for another great year of hover cruising. </li>
					<li>9/6/14 - Date set for the 2015 Florida Cruise -  The cruise will still be at 
					Loughmans Lake Lodge like last year, and will be held April 17-19, 2015. </li>
					<li>6/24/14 - Hoverally Piqua 2014 - Will feature Australian Hovercraft Designer Owen Ellis, founder of Revtech Hovercraft, as guest speaker at the banquet. 
					Owen will share his experiences with his Hovercraft companies through the years. </li>
					<li>5/23/14 - Upcoming - Connecticut High School Hovercraft competition </li>
					<li>5/6/14 - Upcoming - White River Cruise in Noblesville, Indiana</li>
					<li>2/16/14 - Minnesota Hoverclub members James and Doug Kenison have gained 
					some great notoriety with their Deer rescue on ice </li>
				</ul>
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
