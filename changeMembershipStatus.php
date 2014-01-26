<?php
require 'core.inc.php';
require 'connect.inc.php';

echo "hi";
$status = 1;
if($status >= 0 && $status <= 4) {
	$username = $_SESSION['username'];
	$updateQuery = "UPDATE users_table SET `status` = '$status' WHERE `username` = '$username'";
	mysql_query($updateQuery) or die("ERROR: ".mysql_error());
	$_SESSION['status'] = $status;
} else echo "baa";

header('Location: account.php');
?>