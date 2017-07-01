<?php
session_start();
?>
<?php
include('./connect.php');
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
		//case did log in;
		echo 0;
	}else
	{
		//case password did not match
		echo 1;
	}

}else{
	//case could not find username
	echo 2;
}

mysqli_close($conn);
?>
