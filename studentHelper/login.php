<script src="javascript.js">
</script>
<?PHP
session_start();
require 'Database/configure.php';
$email=$_POST['Email'];
$password=$_POST['password'];


$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);

$login="SELECT * FROM `users` WHERE Email = '$email' AND password = '$password' ";

$result=(mysqli_query($conn,$login));
$row=mysqli_fetch_array($result);

if(!($row['Email'] == $email && $row['Password'] == $password)) {
	echo '<script type="text/javascript">',
     'wrongUserPass();',
     '</script>';
	header('location:index.php');
} else {
	$_SESSION[loggedIn]='true';
	$_SESSION[Email] = $_POST['Email'];

if($row['userType'] == stud) {
	header('location:mainPage.php');
} else {
	header('location:mainPageLecturer.php');
	}
}

?>
