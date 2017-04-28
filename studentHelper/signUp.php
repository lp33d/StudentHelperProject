<?PHP
require 'Database/configure.php';
//Allows functions from 'Database/configure.php' to be run
$fName=$_POST['fName'];
//Loads the form variable fName into the PHP variable fName
$lName=$_POST['lName'];
$email=$_POST['Email'];
$password=$_POST['password'];

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);
//Runs mysqli_connect with parameters intialised in configure.php with the result stored in $conn
if(isset($fName) AND isset($lName) AND isset($password)  AND isset($email)) {
	//If all the variables contain some data this will run
	$newUser = $conn->query("INSERT INTO users (email, password, userType) VALUES ('{$email}','{$password}', 'stud')");
	$_SESSION[loggedIn]='true';
	//Sets the SESSION variable 'loggedIn' to true allowing the user to access restricted parts of the site
	$_SESSION[Email] = $_POST['Email'];
} 
header('location: mainPage.php');
?>
