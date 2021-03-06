<!DOCTYPE html>

<html>
<head>
	<link href="signUp.css" type="text/css" rel="stylesheet"/>
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
						<td class="cell"> <a id="photos" href="photos.html">Photos </a> </td>
						<td class="cell"> <a id="directory" href="memberDirectory.php">Member Directory </a> </td>
						<td class="cell" id="login">
							<?php
							if(isset($_SESSION['uid'])){
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
		

			 
			
			

			<fieldset>
				<legend> Member Sign Up</legend>
				<form action= "signUp.php" method="post">
					<div id="listDiv">
						<span id="firstNameLabel">*First Name:</span>
						<input type="text" name="firstName"/> 
						<span id="emailLabel">*E-mail:</span>
						<input type="text" name="email"/> <br/>
						<span id="lastNameLabel">*Last Name:</span>
						<input type="text" name="lastName"/> 
						<span id="referenceLabel">How did you hear about us?</span>
						<select class="dropList" name="reference">
							<option> Friend / Acquaintance</option>
							<option> Online Search (Google, Bing, ect)</option>
							<option> Newspaper or Magazine Article</option>
							<option> E-mail Solicitation</option>
							<option> Event or Meeting</option>
							<option> Phone or Marketing Call</option>
						</select> <br/>
						<span id="addressLabel">Address:</span>
						<input type="text" name="address"/> 
						<span id="hovercraftLabel">Type of hovercraft owned:</span>
						<select class="dropList" name="hovercraft">
							<option> I don't have a hovercraft yet</option>
							<option> My hovercraft is not listed</option>
							<option> My own design</option>
							<option> </option>
							<option> Air Commander</option>
							<option> Amphibious Marine</option>
							<option> Bill Baker BBV</option>
							<option> Coffcraft</option>
							<option> Cushion Flight 240</option>
							<option> Flying Fish Marlin</option>
							<option> Graham Spencer Heron</option>
							<option> Graham Spencer Stealth</option>
							<option> Graham Spencer Swift </option>
							<option> Hovercraft America 5</option>
							<option> Hovpod </option>
							<option> Hovertechnics Hoverjet</option>
							<option> Hovertechnics Hoverstar</option>
							<option> Hovertechnics Hovertour</option>
							<option> Hovertechnics Other</option>
							<option> Ivanoff Eurocraft, Ivanoff IH-6</option>
							<option> Neoteric Hovertrek</option>
							<option> Neoteric Questrek</option>
							<option> Neoteric Other</option>
							<option> Revtech Renegade</option>
							<option> Revtech Rocket</option>
							<option> Scat 1</option>
							<option> Scat 2</option>
							<option> Scat 12HP</option>
							<option> Sevtec Scout</option>
							<option> Sevtec Vanguard</option>
							<option> Sevtec Surveyor</option>
							<option> Sevtec Geoduck</option>
							<option> Sevtec Prospector</option>
							<option> Sevtec Explorer</option>
							<option> Sevtec Mariner</option>
							<option> Sevtec Other</option>
							<option> Universal Hovercraft UH-6F</option>
							<option> Universal Hovercraft UH-10F</option>
							<option> Universal Hovercraft UH-10F2</option>
							<option> Universal Hovercraft UH-12T4</option>
							<option> Universal Hovercraft UH-12R</option>
							<option> Universal Hovercraft UH-13P</option>
							<option> Universal Hovercraft UH-13PT</option>
							<option> Universal Hovercraft UH-13T</option>
							<option> Universal Hovercraft UH-14P</option>
							<option> Universal Hovercraft UH-15P</option>
							<option> Universal Hovercraft UH-15TA</option>
							<option> Universal Hovercraft UH-16S </option>
							<option> Universal Hovercraft UH-17T </option>
							<option> Universal Hovercraft UH-18SP</option>
							<option> Universal Hovercraft UH-19P</option>
							<option> Universal Hovercraft Renegade</option>
							<option> Universal Hovercraft Other</option>
							<option> Vortex Storm</option>
							<option> Vortex Predator</option>
							<option> Vortex Raptor</option>
							<option> Venom Composites</option>
							<option> Weber Starcruiser</option>
						</select> <br/>
						<span id="cityLabel">City:</span>
						<input type="text" name="city"/> 
						<span id="usernameLabel">*Please enter a username:</span>
						<input type="text" name="userName"/> <br/>
						<span id="stateLabel">State:</span>
						<select name="state">
							<option> AL </option>
							<option> AK</option>
							<option> AZ</option>
							<option> AR</option>
							<option> CA</option>
							<option> CO</option>
							<option> CT</option>
							<option> DE</option>
							<option> FL</option>
							<option> GA</option>
							<option> HI</option>
							<option> ID</option>
							<option> IL</option>
							<option> IN</option>
							<option> IA</option>
							<option> KS</option>
							<option> KY</option>
							<option> LA</option>
							<option> ME</option>
							<option> MD</option>
							<option> MA</option>
							<option> MI</option>
							<option> MN</option>
							<option> MS</option>
							<option> MO</option>
							<option> MT</option>
							<option> NE</option>
							<option> NV</option>
							<option> NH</option>
							<option> NJ</option>
							<option> NM</option>
							<option> NY</option>
							<option> NC</option>
							<option> ND</option>
							<option> OH</option>
							<option> OK</option>
							<option> OR</option>
							<option> PA</option>
							<option> RI</option>
							<option> SC</option>
							<option> SD</option>
							<option> TN</option>
							<option> TX</option>
							<option> UT</option>
							<option> VT</option>
							<option> VA</option>
							<option> WA</option>
							<option> WV</option>
							<option> WI</option>
							<option> WY</option>
						</select>
						<span id="passwordLabel">*Please enter password:</span>
						<input type="text" name="password"/> <br/>
						<span id="zipcodeLabel">Zip Code:</span>
						<input type="text" name="zipcode"/> 
						<span id="retypeLabel">*Please retype your password:</span>
						<input type="text" name="retype"/> <br/>
						<span id="phoneLabel">Phone:</span>
						<input type="text" name="phoneNum"/> <br/>
					</div>
				</form>
				
				<div id="button">
					<input type="submit" name="submitButton" value="Sign Me Up!"/> <br/>
					* Fields must be filled out
				</div>
				
			</fieldset>
			
		
		
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
