<?php
include('../utility/connect.php');
session_start();
include("../utility/serverCheckLogin.php");
$orderId = $_POST['orderId'];
$viewer = $_SESSION['id'];

$stmt = $conn->prepare("SELECT * FROM `workOrderMessages` WHERE orderId = ? AND (sender = ? OR reciever = ?)");
$stmt->bind_param("iii", $orderId, $viewer, $viewer);

$stmt->execute();
$result = $stmt->get_result();

$object = "[";
while ($myrow = $result->fetch_assoc()) {
	$object.="{\"time\":\"".$myrow['time']."\",\"message\":\"".$myrow['message']."\"},";
}
$object = substr($object, 0, -1);
$object.="]";
echo $object;


mysqli_close($conn);
?>
