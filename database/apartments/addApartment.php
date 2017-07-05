<?php
include('../utility/connect.php');
session_start();
include("../utility/serverCheckLogin.php");
include("../utility/serverCheckManager.php");

$apartmentName 	= $_POST["apartmentName"];
$numUnits 		= $_POST["numUnits"];
$managerId 		= $_SESSION["id"];

$stmt = $conn->prepare("INSERT INTO `apartment` (`name`, `units`, `vacancies`, `managerId`) VALUES (?,?,?,?)");
$stmt->bind_param("siii", $apartmentName, $numUnits, $numUnits, $managerId);

if($stmt->execute())
{
	//succesfully executed insert
	echo 0;
}else
{
	//failed to execute insert
	echo 2;
}

mysqli_close($conn);
?>
