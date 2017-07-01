<?php
include('./connect.php');
$userId 	= $_GET["userId"];
$unitNumber = $_GET["unitNumber"];
$firstName 	= $_GET["firstName"];
$lastName 	= $_GET["lastName"];

$stmt = $conn->prepare("INSERT INTO `tenants` (`userId`, `unitNumber`, `firstName`, `lastName`) VALUES (?,?,?,?)");
$stmt->bind_param("iiss", $userId, $unitNumber,$firstName,$lastName);

if($stmt->execute())
{
	echo 1;
}else
{
	echo 0;
}

mysqli_close($conn);
?>
