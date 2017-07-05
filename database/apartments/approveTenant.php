<?php
include('../utility/connect.php');
session_start();
include("../utility/serverCheckLogin.php");
include("../utility/serverCheckManager.php");

$tenantId = $_POST["tenantId"];
$managerId = $_SESSION["id"];

$stmt = $conn->prepare("UPDATE `tenants` SET approved = 1 WHERE apartmentId IN (SELECT apartmentId FROM `apartment` where managerId = ?) AND userId = ?");
$stmt->bind_param("ii", $managerId, $tenantId);

if($stmt->execute())
{
	echo 0;
}else
{
	echo 2;
}

mysqli_close($conn);
?>
