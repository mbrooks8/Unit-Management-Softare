<?php
session_start();
if($_SESSION["type"] == 1)
{
	echo 1;
}else{
	echo 0;
}
?>
