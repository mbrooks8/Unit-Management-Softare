<?php
session_start();
if (isset($_SESSION['type']))
{
	if ($_SESSION["type"] == 1)
	{
		echo 25;//manager
		exit();
	}else
	{
		echo 26;//tenant
		exit();
	}
}else{
	echo 21;//not logged in
	exit();
}
?>
