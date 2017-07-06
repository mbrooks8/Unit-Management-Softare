<?php
include('../utility/connect.php');
session_start();
include("../utility/serverCheckLogin.php");
$userId = $_SESSION['id'];
$apartmentId = $_POST['apartmentId'];



if($_SESSION['type'] == 1)
{

	$stmt = $conn->prepare("SELECT * FROM `workOrders` WHERE apartmentId IN (SELECT apartmentId FROM `apartment` where managerId = ?) AND apartmentId = ?");
	$stmt->bind_param("ii", $userId, $apartmentId);

	$stmt->execute();
	$result = $stmt->get_result();

	$object = "[";
	while ($myrow = $result->fetch_assoc()) {
		$object.="{\"dateSubmitted\":\"".$myrow['dateSubmitted']."\",\"expectedCompletion\":\"".$myrow['expectedCompletion']."\",\"title\":\"".$myrow['title']."\",\"status\":".$myrow['status'].",\"urgency\":".$myrow['urgency'].",\"completed\":".$myrow['completed'].",\"userId\":".$myrow['userId'].",\"orderId\":".$myrow['orderId'].",\"apartmentId\":".$myrow['apartmentId']."},";
	}
	$object = substr($object, 0, -1);
	$object.="]";
	echo $object;
}else
{
	$stmt = $conn->prepare("SELECT * FROM `workOrders` WHERE userId = ?");
	$stmt->bind_param("i", $userId);

	$stmt->execute();
	$result = $stmt->get_result();

	$object = "[";
	while ($myrow = $result->fetch_assoc()) {
		$object.="{\"dateSubmitted\":\"".$myrow['dateSubmitted']."\",\"expectedCompletion\":\"".$myrow['expectedCompletion']."\",\"title\":\"".$myrow['title']."\",\"description\":\"".$myrow['description']."\",\"status\":".$myrow['status'].",\"urgency\":".$myrow['urgency'].",\"completed\":".$myrow['completed'].",\"userId\":".$myrow['userId'].",\"orderId\":".$myrow['orderId'].",\"apartmentId\":".$myrow['apartmentId']."},";
	}
	$object = substr($object, 0, -1);
	$object.="]";
	echo $object;
}


mysqli_close($conn);
?>
