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
	<title>Coursework Dropoff</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
	<!--<script src="Javascript/JS.js">-->
	</script>
</head>
<body>
	<section id="externalWrapper">
		<h2 style="display:none;">.</h2>
		<nav>
				<ul>
				<li>
					<a href="index.php" id="logo">Student Helper</a>
				</li>
				<li>
					<a href="createGroupPage.php">Create Group</a>
				</li>
				<li>
					<a href="joinGroup.php">Join Group</a>
				</li>
				<li>
					<a href="routeFinder.php">Route Finder</a>
				</li>
				<li>
					<a class="active" href="courseworkDropoffStud.php">Coursework Dropoff</a>
				</li>
			</ul>
			<li>
				<a href="logout.php">Logout</a>
			</li>
		</nav>
		<section id="internalWrapper">
	 		<div id="wrapper">

				   <ul class="rig columns-3">
		<li>
			<img src="St_Images/java.gif" alt="" />

		</li>
		<li>
			<img src="St_Images/Mathfun.gif" alt="" />

		</li>
		<li>
			<img src="St_Images/Webfun.gif" alt="" />

		</li>

	</ul>

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
