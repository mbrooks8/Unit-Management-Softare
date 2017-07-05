<?php
session_start();
?>
<?php
include('../utility/connect.php');
$username = $_POST["username"];
$password = $_POST["password"];
$stmt = $conn->prepare('SELECT password,id,type FROM `users` WHERE username = ?');

$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($myrow = $result->fetch_assoc()) {
	if(password_verify($password, $myrow['password']))
	{
		$_SESSION["username"] = $username;
		$_SESSION["id"] = $myrow['id'];
		$_SESSION["type"] = $myrow['type'];
		echo 0;
	}else
	{
		//case password did not match
		echo 12;
	}
	mysqli_close($conn);
	die();

}
//case could not find username
echo 14;
mysqli_close($conn);
?>
