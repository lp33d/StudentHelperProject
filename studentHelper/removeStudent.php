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
		</nav>
		</nav>
		<section id="internalWrapper">

			<div class="row cf">

				<div class="half">

					<div class="row cf">
						<div class="full">
							<a href="joinGroup.html">Remove Student</a>
						</div>
					</div>															<?php
$db = pg_connect("host=localhost port=5432 dbname=studyGroup user=postgres password=password");
$result = pg_query($db, "SELECT * FROM room where study_name = '$_POST[studyName]'");
$row = pg_fetch_assoc($result);
if (isset($_POST['submit']))
{
echo "<ul>
<form name='update' action='joinGroup.php' method='POST' >
<li>studyGroup name:</li><li><input type='text' name='studyName_updated' value='$row[study_name]'  /></li>
<li>room:</li><li><input type='text' name='room_name_updated' value='$row[room_name]' /></li>
<li>Projector:</li><li><input type='text' name='projector_updated' value='$row[projector]' /></li>
<li>Date :</li><li><input type='text' name='date_updated' value='$row[date]' /></li>
<li>Time:</li><li><input type='text' name='time_updated' value='$row[time]' /></li>
<li><input type='submit' name='new' /></li>
  </form>
</ul>";
}
if (isset($_POST['new']))
{
$result1 = pg_query($db, "UPDATE room SET study_name = '$_POST[studyName_updated]', study_name = '$_POST[studyName_updated]',
projector = '$_POST[projector_updated]', projector = '$_POST[projector_updated]',date = '$_POST[date_updated]',
time = '$_POST[time_updated]'");
if (!$result1)
{
echo "Update failed!!";
} else
{
echo "Update successfull;";
}
}
?>
					<div class="row cf">
						<div class="half">

																																											<form name="display" action="joinGroup.php" method="POST" >
<li>Search by Student ID:</li><li><input type="text" name="studyName" /></li>
<li><input type="submit" name="submit" /></li>
</form>
						</div>

					</div>

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
