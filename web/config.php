<?php
define('DB_SERVER', 'localhost');
define('DB_USENAME', 'root');
define('DB_PASSWORD', 'Admin@123$');
define('DB_NAME', 'login_signup');

$link=mysqli_connect(DB_SERVER,DB_USENAME,DB_PASSWORD,DB_NAME);
//Check connection
if ($link==false) {
	# code...
	die("ERROR: Could not connect.".mysqli_connect_error());
}




?>