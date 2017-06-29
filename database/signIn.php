<?php
include('./connect.php');
$username = $_POST["username"];
$password = $_POST["password"];
$stmt = $conn->prepare("SELECT password FROM `users` WHERE username = ?");

$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

while ($myrow = $result->fetch_assoc()) {
	if(password_verify($password, $myrow['password']))
	{
		echo 1;
	}else
	{
		echo 0;
	}

}

mysqli_close($conn);
?>
