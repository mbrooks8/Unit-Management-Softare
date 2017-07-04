<?php
include('../utility/connect.php');
session_start();
include("../utility/serverCheckLogin.php");
include("../utility/serverCheckTenant.php");

$userId 			= $_SESSION['id'];
$title 				= $_POST["title"];
$description		=$_POST["description"];
$urgency			=$_POST["urgency"];//in progress / under review

$stmt = $conn->prepare("INSERT INTO `workOrders` (`userId`, `title`, `description`, `urgency`) values (?,?,?,?)");
$stmt->bind_param("issi", $userId, $title, $description, $urgency);
if($stmt->execute())
{
	echo 0;
	die();
}else{
	echo 2;
	die();
}
//apartment Id is incorrect
echo 24;
mysqli_close($conn);
?>
