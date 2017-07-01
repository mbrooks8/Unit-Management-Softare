<?php
include('./connect.php');
$managerId = $_POST["managerId"];

$stmt = $conn->prepare("SELECT * FROM `apartment` WHERE managerId = ?");
$stmt->bind_param("i", $managerId);

$stmt->execute();
$result = $stmt->get_result();

$object = "[";
while ($myrow = $result->fetch_assoc()) {
	$object.="{'name':'".$myrow['name']."','units':".$myrow['units'].",'vacancies':".$myrow['vacancies'].",'apartmentId':".$myrow['apartmentId']."},";
}
$object = substr($object, 0, -1);
$object.="]";
echo $object;

mysqli_close($conn);
?>
