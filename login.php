<?php
include('config.php');
$email =  $_POST['email'];
$sql = "SELECT ID, fName, lName, email, password, phone FROM USER where email= \"$email\"";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$id = ($row["ID"]);
		$fName = ($row["fName"]);
		$lName = ($row["lName"]);
		$phone = ($row["phone"]);
		$pass=($row["password"]);
        echo "email: " . $row["email"]. "  password: " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}
$verify=password_verify($_POST['password'],$pass);
if($verify){
	$_SESSION["loggedIn"] = true;
	$_SESSION["id"] = $id;
	$_SESSION["fName"] = $fName;
	$_SESSION["lName"] = $lName;
	$_SESSION["email"] = $email;
	$_SESSION["phone"] = $phone;
	header("Location: ../myAccount.php");
}else{
	$_SESSION["Login attempts"] += 1;
	echo($_SESSION["Login attempts"]);
	//header("Location: ../login.php");
}
$conn->close();

//https://www.sitepoint.com/hashing-passwords-php-5-5-password-hashing-api/
?>