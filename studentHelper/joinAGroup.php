<link rel="stylesheet" href="CSS/main.css" type="text/css">
<?PHP
session_start();
if(!$_SESSION['loggedIn']) {
	header('location: index.php');

}

require 'Database/configure.php';
if(isset($_SESSION['Email'])) {
$email = $_SESSION['Email'];

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);

$users="SELECT ID FROM users WHERE email = '{$email}'";
$userID= $conn->query($users);
$studyGroup=$_POST['studyGroupName'];
$studyGroupID= $conn->query("SELECT studyID FROM studygroup WHERE studyName = '$studyGroup' ");

while ($row = $userID->fetch_assoc()) {
  while ($row2 = $studyGroupID->fetch_assoc()) {
      
      $addUserToGroup = $conn->query("INSERT INTO instudygroup (user_FK, studyGroup_FK) VALUES ({$row['ID']},{$row2['studyID']})");
  }
};

}
header('location: joinGroup.php');
?>
