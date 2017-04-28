<?php
session_start();
//Starts a php session so that if one hasn't already been started, there isn't an issue caused by calling a session variable
session_destroy();
//Destroys the php session so that all session variables are reset
header("location: index.php");
//Redirects the used to the login page
?>
