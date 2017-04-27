<?php
require 'Database/configure.php';

session_start();
if(!$_SESSION['loggedIn']) {
	header('location: index.php');
}

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);
$email = $_POST['StudentEmail'];
$result = $conn->query("DELETE FROM `users` WHERE `users`.`email` = '{$email}'");


header('location: removeStudent.php');

?>
