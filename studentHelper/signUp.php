<?PHP
require 'Database/configure.php';
$email=$_POST['Email'];
$password=$_POST['password'];

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);

$email = $_POST['email'];
$password = $_POST['password'];


$newUser = $conn->query("INSERT INTO users (email, password, userType) VALUES ('{$email}','{$password}', 'stud')");

header('location: signUp.html');

?>
