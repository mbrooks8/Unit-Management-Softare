<?php
include('../utility/connect.php');
session_start();
include("../utility/serverCheckLogin.php");
include("../utility/serverCheckManager.php");

$apartmentId 	= $_POST["apartmentId"];
$managerId 		= $_SESSION["id"];

$length = 6;
$keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$str = '';
$max = mb_strlen($keyspace, '8bit') - 1;
for ($i = 0; $i < $length; ++$i) {
	$str .= $keyspace[random_int(0, $max)];
}

$publicID = $apartmentId."-".$str;
$stmt = $conn->prepare("UPDATE `apartment` SET `publicID`=? WHERE managerId = ? AND apartmentId = ?");
$stmt->bind_param("sii", $publicID, $managerId, $apartmentId);

if($stmt->execute())
{
	echo 0;
}else
{
	echo 2;
}

mysqli_close($conn);
?>
