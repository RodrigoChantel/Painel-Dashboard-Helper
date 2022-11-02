<?php
session_start();
$_SESSION['user'];

if(!$_SESSION['user']) {
	header('http://localhost/helper/controller/logout.php');
	//header("Location: http://localhost/helper/controller/logout.php");
	exit();
}

