<script src="javascript.js">
</script>
<?PHP
require 'Database/configure.php';
$email=$_POST['Email'];
$password=$_POST['password'];

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);

$email = $_POST['email'];
$password = $_POST['password'];
if(isset($_POST['fName']) AND isset($_POST['lName']) AND isset($_POST['password'])  AND isset($_POST['email']) AND isset($_POST['confirmEmail'])) {
$newUser = $conn->query("INSERT INTO users (email, password, userType) VALUES ('{$email}','{$password}', 'stud')");
echo "<script>
      alert('Success! You can now login.');
      </script>";
} else {
};
header('location: signUp.html');

?>
