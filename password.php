<?php
$password = "password";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
var_dump($hashed_password);
if(password_verify($password, $hashed_password)) {
    // If the password inputs matched the hashed password in the database
    // Do something, you know... log them in.
	echo "<br>is correct password";
}

if(password_verify("passwrd", $hashed_password)) {
    // If the password inputs matched the hashed password in the database
    // Do something, you know... log them in.
	echo "<br>is correct password";
}else
{
	echo "<br>is wrong password";
}
?>
