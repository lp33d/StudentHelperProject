<?php
session_start();
if(!$_SESSION['loggedIn']) {
	header('location: index.php');
}

require 'Database/configure.php';
$_POST['submit']='false';
$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);

//require("joinGroupDisplay.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Join Group</title>
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
		<?PHP

		$groups="SELECT * FROM studyGroup";

		$result=$conn->query($groups);

		echo 		"<body>
						  <section id='externalWrapper'>
						   <section id='internalWrapper'>";

		while($row= $result->fetch_assoc()) {

		echo
		"    <div class='row cf'>
					<div class='half'>
						<form name='display' action='joinAGroup.php' method='POST' >
		          <div class='row cf'>
		            <div class='row cf'>
		              <br>
		              <p class='inputName'>Study Group Name: {$row['studyName']} </p>
		              </div>
		              <div class='row cf'>
		              <br>
		              <p class='inputName'>Study Group Location: {$row['room']} </p>
		              </div>
		              <div class='row cf'>
		              <br>
		              <p class='inputName'>Study Group Date: {$row['date']} </p>
		              </div>
		              <div class='row cf'>
		              <br>
		              <p class='inputName'>Study Group Time:  {$row['time']} </p>
		              </div>
									<input name='studyGroupName' hidden='true' required='true' type='text' value='{$row['studyName']}'>
		              <br>
									<p class='inputName'>Max Study Group Students: {$row['studyGroupMaxStudents']} </p>
									<br>
									<p class='inputName'>Does Study room have projector? {$row['projector']} </p>
		              <button id='submit'  class='button' onClick='groupJoined();'>Join Group</button>
		            </div>
		          </div>
		        </form>
					</div>
				</div>";

		}
		echo "			<br>
							<br>
							<br>
							<br>
						</section>
					</section>
				</body>";
?>
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
