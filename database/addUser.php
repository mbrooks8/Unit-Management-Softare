<?php
include('./connect.php');
$username 		= $_POST["username"];
$password 		= $_POST["password"];
$passwordVerify	= $_POST["passwordVerify"];
$type 			= $_POST["type"];

if(strlen($password) < 5)
{
	//1 is error code too few characters
	echo 1;
}else if($password != $passwordVerify)
{
	//2 is error code mismatched passwords
	echo 2;
}else
{
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

	$stmt = $conn->prepare("INSERT INTO `users` (`userName`, `password`, `type`) VALUES (?,?,?)");
	$stmt->bind_param("ssi", $username, $hashedPassword, $type);

	if($stmt->execute())
	{
		//error code 0 means all went well
		echo 0;
	}else
	{
		//error code 3 means username already exists
		echo 3;
	}
}
mysqli_close($conn);
?>
