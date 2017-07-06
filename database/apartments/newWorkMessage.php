<?php
include('../utility/connect.php');
session_start();
include("../utility/serverCheckLogin.php");

$sender 			= $_SESSION['id'];
$type 				= $_SESSION['type'];
$message			= $_POST["message"];
$orderId			= $_POST["orderId"];


echo $message;
echo $orderId;
//First check if a message thread has been started
$stmt = $conn->prepare("SELECT * FROM `workordermessages` WHERE orderId = ?");
$stmt->bind_param("i", $orderId);
$stmt->execute();
$result = $stmt->get_result();
if($myrow = $result->fetch_assoc())
{
	//get any sender reciver combo
	$user1 = $myrow['sender'];
	$user2 = $myrow['reciever'];
	if($sender == $user1){
		$reciever = $user2;
	}else
	{
		$reciever = $user1;
	}
	$stmt = $conn->prepare("INSERT INTO `workOrderMessages` (`orderId`,`message`,`sender`,`reciever`) values(?,?,?,?)");
	$stmt->bind_param("isii", $orderId, $message, $sender, $reciever);
	if($stmt->execute())
	{
		echo 0;
		die();
	}else{
		echo 2;
		die();
	}

}else
{
	echo "message thread does not exist yet";
	if($_SESSION['type'] == 1)
	{
		$stmt = $conn->prepare("SELECT userId FROM workOrders WHERE `orderId` = ?");
		$stmt->bind_param("i", $orderId);
		$stmt->execute();
		$result = $stmt->get_result();
		if($myrow = $result->fetch_assoc())
		{
			$reciever = $myrow['userId'];
		}
		$stmt = $conn->prepare("INSERT INTO `workOrderMessages` (`orderId`,`message`,`sender`,`reciever`) values(?,?,?,?)");
		$stmt->bind_param("isii", $orderId, $message, $sender, $reciever);
		if($stmt->execute())
		{
			echo 0;
			die();
		}else{
			echo 2;
			die();
		}
	}else
	{

		$stmt = $conn->prepare("SELECT managerId FROM `apartment` where managerId IN (SELECT managerID FROM `workorders` WHERE orderId = ?)");
		$stmt->bind_param("i", $orderId);
		$stmt->execute();
		$result = $stmt->get_result();
		if($myrow = $result->fetch_assoc())
		{
			$reciever = $myrow['managerId'];
		}
		$stmt = $conn->prepare("INSERT INTO `workOrderMessages` (`orderId`,`message`,`sender`,`reciever`) values(?,?,?,?)");
		$stmt->bind_param("isii", $orderId, $message, $sender, $reciever);
		if($stmt->execute())
		{
			echo 0;
			die();
		}else{
			echo 2;
			die();
		}

	}

}
mysqli_close($conn);
?>
