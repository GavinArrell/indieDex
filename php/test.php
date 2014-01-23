<?php
$conn_error = 'Could not connect.';

$mysql_host = 'localhost';
$mysql_user = 'root2';
$mysql_pass = '';

@mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die($conn_error);

echo 'Connected!';

?>