<?php
include('./connect.php');
$apartmentName 	= $_POST["apartmentName"];
$numUnits 		= $_POST["numUnits"];
$vacancies 		= $_POST["vacancies"];
$managerId 		= $_POST["managerId"];

$stmt = $conn->prepare("INSERT INTO `apartment` (`name`, `units`, `vacancies`,`managerId`) VALUES (?,?,?,?)");
$stmt->bind_param("siii", $apartmentName, $numUnits, $vacancies, $managerId);

if($stmt->execute())
{
	echo 1;
}else
{
	echo 0;
}

mysqli_close($conn);
?>
