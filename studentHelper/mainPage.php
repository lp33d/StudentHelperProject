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
	<title>Main Page</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
	<script src="javascript.js">
	</script>
</head>
<body>
	<section id="externalWrapper">
		<h2 style="display:none;">.</h2>
		<nav>
			<ul>
				<li>
					<a class="active" href="mainPage.php" id="logo">Student Helper</a>
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
					<a href="courseworkDropoffStud.php">Coursework Dropoff</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</nav>

		<section id="internalWrapper">
	 		<div id="wrapper">

				   <ul class="rig columns-3">
		<li>
			<img src="St_Images/routeFinderExample.gif" alt="" />
			<h3> RouteFinder </h3>

			<p>Find your way around the University</p>

		</li>
		<li>
			<img src="St_Images/findStudyGroup.gif" alt="" />
			<h3>Look up study groups</h3>
			<p>Find groups that you can study with</p>

		</li>
		<li>
			<img src="St_Images/createStudyGroup.gif" alt="" />
			<h3>Create a study group</h3>
			<p>Create a group that is specific to you</p>

		</li>
		<li>
			<img src="St_Images/dropOfExample.gif" alt=""/>
			<h3>Find the course work drop off point</h3>
			<p>Look up what course work drop off point are located</p>

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
