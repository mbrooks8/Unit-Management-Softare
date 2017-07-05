<?php
include('../utility/connect.php');
session_start();
include("../utility/serverCheckLogin.php");
include("../utility/serverCheckTenant.php");

$userId 			= $_SESSION['id'];
$title 				= $_POST["title"];
$description		=$_POST["description"];
$urgency			=$_POST["urgency"];//in progress / under review

$stmt = $conn->prepare("SELECT apartmentId FROM `tenants` where userId = ? AND approved = 1");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if($myrow = $result->fetch_assoc())
{
	$stmt = $conn->prepare("INSERT INTO `workOrders` (`userId`, `title`, `description`, `urgency`, `apartmentId`) values (?,?,?,?,?)");
	$stmt->bind_param("issii", $userId, $title, $description, $urgency,$myrow['apartmentId']);
	if($stmt->execute())
	{
		echo 0;
		die();		
	}else{
		echo 2;
		die();
	}
}else
{
	echo 27;
	die();
}
mysqli_close($conn);
?>
