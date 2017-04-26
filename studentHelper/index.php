<?php
session_start();
$_SESSION['loggedIn']=false;
if(!$_SESSION['loggedIn']) {
	// header('location: index.php');
} else {
	header('location: mainPage.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	<section id="externalWrapper">
		<h2 style="display:none;">.</h2>
		<nav>
			<ul>
				<li>
					<a href="index.php" id="logo">Student Helper</a>
				</li>
			</ul>
		</nav>
		<section id="internalWrapper">
			<div class="row cf">
				<div class="half">
					<form action="login.php" method="post">
						<div class="row cf">
							<div class="full">
								<h2>Login</h2>
							</div>
						</div>
						<div class="row cf">
							<div class="half">
								<p class="inputName">Email address:</p>
							</div>
							<div class="half">
								<input id="Eail" name="Email" required="true" type="text">
							</div>
						</div>
						<div class="row cf">
							<div class="half">
								<p class="inputName">Password:</p>
							</div>
							<div class="half">
								<input id="password" name="password" required="true" type="password">
							</div>
						</div>
						<div class="row cf">
							<div class="threeQuarters">
								<a class="button" href="signUp.html">Forgot logon credentials</a>
							</div>
							<div class="quarter">
								<button type="submit" id="submit" class="button" >Submit</button>
							</div>
						</div>
					</form>
				</div>
				<div class="half">
					<form>
						<div class="row cf">
							<div class="full">
								<h2>Sign up</h2>
							</div>
						</div>
						<div class="row cf">
							<div class="full">
								<a class="button" href="signUp.html">New user?</a>
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
