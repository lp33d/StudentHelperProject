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
	<script src="javascript.js">
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
				<form name="createGroup" action="LectaddRoom.php" method="post">
					<div class="row cf">
						<div class="full">
							<h2>Add Room</h2>
						</div>
					</div>
					<div class="row cf">
						<div class="half">
							<p class="inputName" name="build_name">Building name</p>
						</div>
						<div class="half">
							<input id="buildingName" name="buildingName" required="true" type="text">
						</div>
					</div>
					<div class="row cf">
						<div class="half">
							<p class="inputName" name="room_name">Room Name / Number:</p>
						</div>
						<div class="half">
							<input id="roomName" name="roomName" required="true" type="text">
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
								<p class="inputName">Max Students (1 - 999): </p>
							</div>
							<div class="half">
								<input name="maxStudents" required="true" pattern="([0-9]|[0-9][0-9][0-9]|[0-9][0-9])">
							</div>
					</div>
					<div class="row cf">
						<div class="quarter">
							<input type="submit" id="submit" class="button" value="Submit" onclick="roomAdded()">
						</div>
					</div>
				</form>

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
