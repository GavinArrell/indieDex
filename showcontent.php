<?php
require 'core.inc.php';
require 'connect.inc.php';

include 'general.php';

$resultsStartNo = 0;
$resultsToShow  = 10;

$query = "SELECT * FROM `content-index_table` ORDER BY `id` DESC LIMIT '$resultsStartNo', '$resultsToShow'";

if(isset($_POST['value']) && isset($_POST['action'])) {
	$value  = $_POST['value'];
    $action = $_POST['action'];
	
    switch($action) {
        case 'gotoPage'    : gotoPage($value); break;
		case 'getLastPage' : getLastPage();    break;
    }
	
	
} else echo "hey";

function gotoPage($index) {
	
	$resultsStartNo = 10*$index;
	$resultsToShow  = 10;
	$query = "SELECT * FROM `contentnews_table` ORDER BY `id` DESC LIMIT $resultsStartNo, $resultsToShow";
	
	$content = array();
	$html;
	
	if($query_run = mysql_query($query)) {
		while($query_row = mysql_fetch_assoc($query_run)) {
			$html = $query_row['content'];
			echo $html;
		}
	} else die("Agh! Looks like we can't find our games!");
	
}

function getLastPage() {
	
	$resultsToShow = 10;
	$query = "SELECT * FROM `contentnews_table`";
	
	if($query_run = mysql_query($query)) {
		$query_row = mysql_fetch_assoc($query_run);
		echo count($query_row)/$resultsToShow;
	} else die("Agh! Looks like we can't find our games!");
}
?>