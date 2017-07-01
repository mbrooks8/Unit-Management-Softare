<?php
include('./connect.php');
$username 	= $_POST["username"];
$password 	= $_POST["password"];
$type 		= $_POST["type"];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO `users` (`userName`, `password`, `type`) VALUES (?,?,?)");
$stmt->bind_param("ssi", $username, $hashedPassword, $type);

if($stmt->execute())
{
	echo 1;
}else
{
	echo 0;
}

mysqli_close($conn);
?>
