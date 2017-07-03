<?php
include('../utility/connect.php');
session_start();
include("../utility/serverCheckLogin.php");
include("../utility/serverCheckManager.php");

$tenantId = $_POST["tenantId"];

$stmt = $conn->prepare("UPDATE `tenants` SET `approved`=1 WHERE userId = ?");
$stmt->bind_param("i", $tenantId);

if($stmt->execute())
{
	echo 0;
}else
{
	echo 2;
}

mysqli_close($conn);
?>
