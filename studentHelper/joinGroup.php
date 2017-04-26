<?php
session_start();
if(!$_SESSION['loggedIn']) {
	header('location: index.php');
}
require 'configure.php';
$_POST['submit']='true';
$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);


$data = mysql_query("use studenthelper; SELECT * FROM studygroup") or die(mysql_error()); 
  while($row = mysql_fetch_assoc($data)){
    echo "No: ".$row['No'].", Name:".$row['studyName']
    .", Surname:".$row['subject']."<br/>";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Join Group</title>
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
		<section id="internalWrapper">

			<div class="row cf">

				<div class="half">
					   <ul>
		<li>
			<img src="St_Images/studyGroupExample2.gif" alt="" height="150" width="200"  />


		</li>
		<li>
			<img src="St_Images/studyGroupExample3.gif" alt="" height="150" width="200" />


		</li>
	</ul>


					<div class="row cf">
						<div class="half">



						</div>
						<div class="half">


						</div>
					</div>
				</div>
			</div>
			<div class="row cf">


			</div>



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
