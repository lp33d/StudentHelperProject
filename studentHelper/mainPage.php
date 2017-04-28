<?php
session_start();
//Starts a php session so that if one hasn't already been started, there isn't an issue caused by calling a session variable
if(!$_SESSION['loggedIn']) {
    //If the user attempts to access this page without being logged in, they will be redirected to the login page
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Main Page</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
	<section id="externalWrapper">
		<nav>
			<ul>
				<li>
					<a class="active" href="mainPage.php" id="logo">Student Helper</a> <!--The anchor with the class of active will be white rather than grey to signify that it is the current page-->
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
			<div class="row cf">
				<div class="third">
					<a href="routeFinder.php"><img alt="" src="St_Images/routeFinderExample.gif">
					<h3>RouteFinder</h3>
					<p>Find your way around the University</p></a>
				</div>
				<div class="third">
					<a href="joinGroup.php"><img alt="" src="St_Images/findStudyGroup.gif">
					<h3>Look up study groups</h3>
					<p>Find groups that you can study with</p></a>
				</div>
				<div class="third">
					<a href="createGroupPage.php"><img alt="" src="St_Images/createStudyGroup.gif">
					<h3>Create a study group</h3>
					<p>Create a group that is specific to you</p></a>
				</div>
				<div class="third">
					<a href="courseworkDropoffStud.php"><img alt="" src="St_Images/dropOfExample.gif">
					<h3>Find the course work drop off point</h3>
					<p>Look up where course work drop off points are located</p></a>
				</div>
			</div>
		</section>
	</section>
	<footer>
		<a href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img alt="Valid CSS!" src="http://jigsaw.w3.org/css-validator/images/vcss" style="border:0;width:88px;height:31px"></a>
	</footer>
</body>
</html>
