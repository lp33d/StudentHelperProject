<?php
require 'Database/configure.php';

session_start();
if(!$_SESSION['loggedIn']) {
	header('location: index.php');
}

// $_POST['submit']='true';

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);

$studyName = $_POST['StudyName'];
$room = $_POST['room'];
$subject = $_POST['subject'];
$projector = $_POST['projector'];
$date = $_POST['date'];
$time = $_POST['time'];
$studyGroupMaxStudents = $_POST['maxStudents'];

$studyRoom = $conn->query("INSERT INTO studyGroup (StudyName, room, subject, projector, date, time, studyGroupMaxStudents ) VALUES ('{$studyName}','{$room}', '{$subject}','{$projector}','{$date}','{$time}', '$studyGroupMaxStudents')");

header('location: createGroupPage.php')

?>
