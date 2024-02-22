<?php
define('DB_SERVER','rds-endpoint');
define('DB_USER','user_name');
define('DB_PASS' ,'password');
define('DB_NAME', 'loginsystem');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

