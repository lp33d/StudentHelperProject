<?php
	session_start();
	if($_SESSION["loggedIn"]==true){
		header("Location: myAccount.php");
	};
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="images/favicon.ico">
    <script src="Javascript/JS.js">
    </script>
</head>
<body>
	<section id="externalWrapper">
		<h2 style="display:none;">.</h2>
		<nav>
			<ul>
				<li>
					<a href="index.php" id="logo">OCM</a>
				</li>
				<li>
					<a href="browse.php">Browse</a>
				</li>
				<li>
					<a class="active" href="login.php">Sign Up/Login</a>
				</li>
			</ul>
		</nav>
		<section id="internalWrapper">
			<div class="row cf">
				<div class="half">
					<form action="php/login.php" method="post">
						<div class="row cf">
							<div class="full">
								<h2>Login</h2>
							</div>
						</div>
						<?php
							if($_SESSION["email"]!=NULL){	
						?>
							<div class="row cf">
								<div class="full">
									<p><?php echo"The email address: " . $_SESSION["email"] . " is already in use.";?></p>
								</div>
							</div>
						<?php
							}
						?>
						<div class="row cf">
							<div class="half">
								<p class="inputName">Email address:</p>
							</div>
							<div class="half">
								<input id="email" name="email" required="" type="email" value="<?php echo $_SESSION["email"];?>">
							</div>
						</div>
						<div class="row cf">
							<div class="half">
								<p class="inputName">Password:</p>
							</div>
							<div class="half">
								<input id="password" name="password" required="" type="password">
							</div>
						</div>
						<div class="row cf">
							<div class="threeQuarters">
								<a class="button" href="signUp.php">Forgot logon credentials</a>
							</div>
							<div class="quarter">
								<input type="submit" id="submit" class="button" value="Submit">
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
								<a class="button" href="signUp.php">New user?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<footer>
				<a href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a>
				<a href="mailto:support@outdoorcentremanager.co.uk">Support</a>
				<a href="http://jigsaw.w3.org/css-validator/check/referer">
					<img style="border:0;width:88px;height:31px"
						src="http://jigsaw.w3.org/css-validator/images/vcss"
						alt="Valid CSS!" />
				</a>
			</footer>
		</section>
	</section>
</body>
</html>