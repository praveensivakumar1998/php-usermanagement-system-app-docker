<?php
define('DB_SERVER','aws-rds-endpoint');
define('DB_USER','rds_username');
define('DB_PASS' ,'rds_password');
define('DB_NAME', 'loginsystem');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

