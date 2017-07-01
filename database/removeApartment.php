<?php
include('./connect.php');
$apartmentId 	= $_POST["apartmentId"];
$managerId 		= $_POST["managerId"];

$stmt = $conn->prepare("DELETE FROM `apartment` Where managerId = ? and apartmentId = ?");
$stmt->bind_param("ii", $managerId, $apartmentId);

if($stmt->execute())
{
	echo "successfully deleted";
	echo 1;
}else
{
	echo "could not deleted";
	echo 0;
}

mysqli_close($conn);
?>
