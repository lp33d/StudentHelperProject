<?php
session_start();
//Starts a php session so that if one hasn't already been started, there isn't an issue caused by calling a session variable
if($_SESSION["loggedIn"]==true){
	//If the user is already logged in and they try to access this page, they will be redirected to the main page
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
	<section id="externalWrapper"><!--Container for everything other than the footer-->
		<nav>
			<ul>
				<li>
					<a href="index.php" id="logo">Student Helper</a>
				</li>
			</ul>
		</nav>
		<section id="internalWrapper">
		<!--Container for the main content of the page-->
			<div class="row cf">
			<!--Allows for the items to be aligned in a row-->
				<div class="half">
				<!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
					<form action="login.php" method="post">
					<!--The form will run login.php when the form is submitted using the POST method. POST is used as sensitive data is being transmitted (password) and so GET would be irresponsible as this would put the user's password in the address bar.-->
						<div class="row cf">
							<h1>Login</h1>
						</div>
						<div class="row cf">
							<div class="half">
								<p class="inputName">Email address:</p>
								<!--Informs the user what piece of information is required from them-->
							</div>
							<div class="half">
								<input id="Email" name="Email" type="email" placeholder="example@studentHelper.co.uk" required>
								<!--Placeholder gives the user an example of what they need to provide-->
							</div>
						</div>
						<div class="row cf">
							<div class="half">
								<p class="inputName">Password:</p>
							</div>
							<div class="half">
								<input id="password" name="password" type="password" required>
							</div>
						</div>
						<div class="row cf">
							<div class="threeQuarters">
							<!--Same as half, but takes up 75% of the row instead of 50%-->
								<a class="button" href="signUp.html">Forgot logon credentials</a>
							</div>
							<div class="quarter">
							<!--Same as half, but takes up 25% of the row instead of 50%-->
								<button class="button" id="submit" type="submit">Submit</button>
								<!--Sumbits the form when clicked-->
							</div>
						</div>
					</form>
				</div>
				<div class="half">
					<form>
					<!--This form has neither an action or a method as the form tag is being used solely for it's attributed styles-->
						<div class="row cf">
							<div class="full">
								<h2>Sign up</h2>
							</div>
						</div>
						<div class="row cf">
							<div class="full">
								<a class="button" href="signUp.html">New user?</a>
								<!--Redirects the user to the sign up form when clicked-->
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</section>
	<footer>
	<!--Contains some information that may be of interest to a small portion of users. Likely to missed by screen readers as it's the final piece of content on every page.-->
		<a href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a>
		<a href="http://jigsaw.w3.org/css-validator/check/referer"><img alt="Valid CSS!" src="http://jigsaw.w3.org/css-validator/images/vcss" style="border:0;width:88px;height:31px"></a>
	</footer>
</body>
</html>
