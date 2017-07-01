<?php
include('./connect.php');

include("./isLoggedIn.php");

if($_SESSION["id"] == 0)
{
	echo"you are not a manager";
	exit();
}

$apartmentName 	= $_POST["apartmentName"];
$numUnits 		= $_POST["numUnits"];
$managerId 		= $_SESSION["id"];

$stmt = $conn->prepare("INSERT INTO `apartment` (`name`, `units`, `vacancies`, `managerId`) VALUES (?,?,?,?)");
$stmt->bind_param("siii", $apartmentName, $numUnits, $numUnits, $managerId);

if($stmt->execute())
{
	echo 1;
}else
{
	echo 0;
}

mysqli_close($conn);
?>
