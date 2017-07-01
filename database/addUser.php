<?php
include('./connect.php');
$username 	= $_GET["username"];
$password 	= $_GET["password"];
$type 		= $_GET["type"];

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
