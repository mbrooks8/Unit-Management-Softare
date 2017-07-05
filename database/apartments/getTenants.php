<?php
include('../utility/connect.php');
session_start();
include("../utility/serverCheckLogin.php");
include("../utility/serverCheckManager.php");
$managerId = $_SESSION['id'];
$apartmentId = $_POST['apartmentId'];

$stmt = $conn->prepare("SELECT * FROM `tenants` WHERE apartmentId IN (SELECT apartmentId FROM `apartment` where managerId = ?) AND apartmentId = ?");
$stmt->bind_param("ii", $managerId, $apartmentId);

$stmt->execute();
$result = $stmt->get_result();

$object = "[";
while ($myrow = $result->fetch_assoc()) {
	$object.="{\"firstName\":\"".$myrow['firstName']."\",\"lastName\":\"".$myrow['lastName']."\",\"unitNumber\":".$myrow['unitNumber'].",\"approved\":".$myrow['approved'].",\"userId\":".$myrow['userId']."},";
}
$object = substr($object, 0, -1);
$object.="]";
echo $object;


mysqli_close($conn);
?>
