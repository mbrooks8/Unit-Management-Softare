<?php
include('../utility/connect.php');
session_start();
include("../utility/serverCheckLogin.php");
include("../utility/serverCheckManager.php");
$managerId = $_SESSION['id'];

$stmt = $conn->prepare("SELECT * FROM `apartment` WHERE managerId = ?");
$stmt->bind_param("i", $managerId);
if($stmt->execute())
{
	$result = $stmt->get_result();

	$object = "[";
	while ($myrow = $result->fetch_assoc()) {
		$object.="{\"name\":\"".$myrow['name']."\",\"units\":".$myrow['units'].",\"vacancies\":".$myrow['vacancies'].",\"publicId\":\"".$myrow['publicId']."\",\"apartmentId\":".$myrow['apartmentId']."},";
	}
	$object = substr($object, 0, -1);
	$object.="]";
	echo $object;
}else
{
	echo 2;
}


mysqli_close($conn);
?>
