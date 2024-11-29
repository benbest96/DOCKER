<?php
//all the variables defined here are accessible in all the files that include this one

$dbhost = getenv('MYSQL_HOST');
$dbusername = "root";
$dbpass = getenv('MYSQL_ROOT_PASSWORD');
$dbname = getenv('MYSQL_DB_NAME');

$con= new mysqli($dbhost,$dbusername,$dbpass,$dbname)or die("Could not connect to mysql".mysqli_error($con));

?>