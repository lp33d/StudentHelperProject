<?PHP

require 'Database/configure.php';

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);

$buildName = $_POST['buildingName'];
$roomName = $_POST['roomName'];
$maxStudents = $_POST['maxStudents'];
$projector = $_POST['projector'];

$newRoom = $conn->query("INSERT INTO room (buildingName, roomName, maxStudents, projector) VALUES ('{$buildName}','{$roomName}','{$maxStudents}','{$projector}')");

header('location: addRoom.php');

?>
