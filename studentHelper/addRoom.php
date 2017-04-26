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
	<link href="stylesheet2.css" rel="stylesheet" type="text/css">
	<!--<script src="Javascript/JS.js">-->
	</script>
</head>
<body>
	<section id="externalWrapper">
		<h2 style="display:none;">.</h2>
		<nav>
				<nav>
			<ul>
				<li>
					<a href="mainPageLecturer.php" id="logo">Lecturer Helper</a>
				</li>
				<li>
					<a href="addRoom.php">Add Room</a>
				</li>
				<li>
					<a href="removeStudent.php">Remove Student</a>
				</li>
				<li>
					<a href="courseworkDropoff.php">Coursework Dropoff</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</nav>
			</ul>
		</nav>
		<section id="internalWrapper">
			<div class="row cf">
				<div class="half">
					<div class="row cf">
						<div class="full">
							<a href="createGroup.html">Add Room</a>
						</div>
					</div>

				</div>

			</div>
			<div class="row cf">


			</div>

			<ul>
<form name="createGroup" action="createGroup.php" method="POST" >
<li>Building:</li><li><input type="text" name="StudyName" /></li>
<li>Room Number:</li><li><input type="text" name="room_name" /></li>
<li>Projector:</li><li><input type="text" name="projector" /></li>
<li>Number_Of_students:</li><li><input type="text" name="numOfStud" /></li>
<li>Timings</li><li><input type="text" name="time" /></li>
<li><input type="submit" /></li>
</form>
</ul>
		</section>

	</section>
	<footer>
				<a href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a>
				<a href="mailto:support@outdoorcentremanager.co.uk">Support</a>
				<a href="http://jigsaw.w3.org/css-validator/check/referer">
					<img style="border:0;width:88px;height:31px"
						src="http://jigsaw.w3.org/css-validator/images/vcss"
						alt="Valid CSS!" />
				</a>
			</footer>
</body>
</html>
