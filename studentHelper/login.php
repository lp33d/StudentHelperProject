<?PHP
require 'Database/configure.php';
$email=$_POST['Email'];
$password=$_POST['password'];

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);

$login="SELECT * FROM `users` WHERE Email = '$email' AND password = '$password' ";


$result=(mysqli_query($conn,$login));
$row=mysqli_fetch_array($result);

if(!($row['Email'] == $email && $row['Password'] == $password)) {
	{echo 'Wrong email or password';}
	{echo '. Please Go back and try logging in again.';}
} else {
	session_start();
	$_SESSION[loggedIn]='true';

if($row['userType'] == stud) {
	header('location:mainPage.php');
} else {
	header('location:mainPageLecturer.php');
	}
}
?>
