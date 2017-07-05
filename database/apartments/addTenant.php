<?php
include('../utility/connect.php');
session_start();
include("../utility/serverCheckLogin.php");
include("../utility/serverCheckTenant.php");
$publicId 	= $_POST["publicId"];

$unitNumber = $_POST["unitNumber"];
$firstName 	= $_POST["firstName"];
$lastName 	= $_POST["lastName"];
$userId		= $_SESSION['id'];

$stmt = $conn->prepare("SELECT * FROM `apartment` WHERE publicId = ?");
$stmt->bind_param("s", $publicId);
$stmt->execute();
$result = $stmt->get_result();
if ($myrow = $result->fetch_assoc()) {

	$stmt = $conn->prepare("INSERT INTO `tenants` (`unitNumber`, `firstName`, `lastName`,`userId`,`apartmentId`) VALUES (?,?,?,?,?)");
	$stmt->bind_param("issii", $unitNumber,$firstName,$lastName,$userId,$myrow['apartmentId']);
	if($stmt->execute())
	{
		//succesfully submitted tenants to database
		echo 0;
	}else
	{
		//could not submit to database
		echo 2;
	}
	mysqli_close($conn);
	die();

}
//apartment Id is incorrect
echo 24;
mysqli_close($conn);
?>
