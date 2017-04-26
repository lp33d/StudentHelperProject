<?php
session_start();
if(!$_SESSION['loggedIn']) {
	header('location: index.php');
}

require("joinGroupDisplay.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Join Group</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
	<script src="javascriptjs">
	</script>
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
					<a href="createGroupPage.php">Create Group</a>
				</li>
				<li>
					<a class="active" href="joinGroup.php">Join Group</a>
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
		<!--

		<section id="internalWrapper">
			<div class="row cf">
				<div class="half">
					<form name="display" action="joinGroup.php" method="POST" >
						<div class="row cf">
							<div class="full">
							<a href="joinGroup.html">Search by subject</a>
						</div>
					</div>
					<div class="row cf">
						<div class="half">
								<li>Study Room Name:</li><li><input type="text" name="studyName" /></li>
								<li><input type="submit" name="submit" /></li>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section> -->
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
