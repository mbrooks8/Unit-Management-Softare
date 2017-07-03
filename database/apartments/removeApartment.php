<?php
include('../utility/connect.php');
session_start();
include("../utility/serverCheckLogin.php");
include("../utility/serverCheckManager.php");
$apartmentId 	= $_POST["apartmentId"];
$managerId 		= $_SESSION['id'];

$stmt = $conn->prepare("DELETE FROM `apartment` Where managerId = ? and apartmentId = ?");
$stmt->bind_param("ii", $managerId, $apartmentId);

if($stmt->execute())
{
	echo 0;
}else
{
	echo 2;
}

mysqli_close($conn);
?>
