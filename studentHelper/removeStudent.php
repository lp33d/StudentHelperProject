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
		<section id="internalWrapper">
				<div class="row cf">
					<div class="half">
						<form name="display" action="lectRemoveStudent.php" method="POST" >
							<div class="row cf">
								<div class="half">
									<div class="row cf">
											<h2>Remove Student</h>
									</div>
								</div>
							</div>
							<div class="row cf">
								<div class="half">
									<p class="inputName" name="StudentEmail">Student Email: </p>
								</div>
								<div class="half">
									<input name="StudentEmail" required="true" type="text">
								</div>
							</div>
							<div class="row cf">
								<div class="full">
									<input type="submit" id="submit" class="button" value="Submit" onclick="removeStudent()">
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
