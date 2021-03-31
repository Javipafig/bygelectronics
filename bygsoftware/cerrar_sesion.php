<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
	echo "Gracias";
header("Location: Login.php"); // Redirecting To Home Page
}
?>