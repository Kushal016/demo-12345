<?php

ob_start();//turns on output buffering
session_start();

$timezone = date_default_timezone_set("Asia/Kolkata");
$con = mysqli_connect('remotemysql.com','joSBOdvfIo','KqaHKmBnyW','joSBOdvfIo');
if(mysqli_connect_errno()){
	echo "Failed".mysqli_connect_errno(); 
}

?>
