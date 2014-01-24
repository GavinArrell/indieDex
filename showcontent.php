<?php
require 'core.inc.php';

$resultsStartNo = 0;
$resultsToShow  = 10;

$query = "SELECT * FROM `content-index_table` ORDER BY id DESC LIMIT $resultsStartNo, $resultsToShow";

if($query_run = mysql_query($query)) {
	while($query_rows = mysql_fetch_assoc($query_run)) {
		
	}
}
?>

