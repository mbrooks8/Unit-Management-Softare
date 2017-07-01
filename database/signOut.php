<?php
session_start();
?>
<?php
session_unset();

session_destroy();
header("location: ./forms/signIn.php");
exit();
?>
