<?php

session_start();
if(!$_SESSION['loggedIn']) {
	header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Create Group</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
	<script src="javascript.js"></script>
</head>
<body>
	<section id="externalWrapper">
		<h2 style="display:none;">.</h2>
		<nav>
			<ul>
				<li>
					<a href="mainPage.php" id="logo">Student Helper</a>
				</li>
				<li>
					<a class="active" href="createGroupPage.php">Create Group</a>
				</li>
				<li>
					<a href="joinGroup.php">Join Group</a>
				</li>
				<li>
					<a href="routeFinder.php">Route Finder</a>
				</li>
				<li>
					<a href="courseworkDropoffStud.php">Coursework Dropoff</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</nav>
		<section id="internalWrapper">
			<div class="row cf">
				<div class="full">
					<form name="createGroup" action="createGroup.php" method="post">
						<div class="row cf">
							<div class="full">
								<h2>Create Group</h2>
							</div>
						</div>
						<div class="row cf">
							<div class="half">
								<p class="inputName" name="StudyName">Study Group Name:</p>
							</div>
							<div class="half">
								<input name="StudyName" required="true" type="text">
							</div>
						</div>
						<div class="row cf">
							<div class="half">
								<p class="inputName">Subject:</p>
							</div>
							<div class="half">
								<input name="subject" required="true" type="text">
							</div>
						</div>
						<div class="row cf">
							<div class="half">
								<p class="inputName" name="theProjector">Room With Projector:</p>
							</div>
							<div class="half">
								<input type="radio" name="projector"
<?php if (isset($projector) && $projector=="yes") echo "checked";?>
value="yes"> Yes
<input type="radio" name="projector"
<?php if (isset($projector) && $projector=="no") echo "checked";?>
value="no"> No
							</div>
						</div>
						<div class="row cf">
							<div class="half">
								<p class="inputName" name="room_name">Room Name:</p>
							</div>
							<div class="half">
								<input id="roomName" name="room" required="true" type="text">
							</div>
						</div>
						<div class="row cf">
							<div class="half">
								<p class="inputName">Date (DD/MM/YYYY) :</p>
							</div>
							<div class="half">
								<input name="date" required="" type="date" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}">
							</div>
						</div>
						<div class="row cf">
							<div class="half">
								<p class="inputName">Time (1 Hour Session HH:MM ) : </p>
							</div>
							<div class="half">
								<input name="time" required="" type="time" pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9])">
							</div>
						</div>
						<div class="row cf">
							<div class="quarter">
								<input type="submit" id="submit" class="button" value="Submit" onclick="newGroup()">
							</div>
						</div>
					</form>

				</div>
			</div>
		</section>
	</section>
	<footer>
				<a href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a>
				<a href="http://jigsaw.w3.org/css-validator/check/referer">
					<img style="border:0;width:88px;height:31px"
						src="http://jigsaw.w3.org/css-validator/images/vcss"
						alt="Valid CSS!" />
				</a>
			</footer>
</body>
</html>
