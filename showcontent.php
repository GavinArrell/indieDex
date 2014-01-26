<?php
require 'core.inc.php';
require 'connect.inc.php';

$resultsStartNo = 0;
$resultsToShow  = 9;

$query = "SELECT * FROM `content-index_table` ORDER BY `id` DESC LIMIT '$resultsStartNo', '$resultsToShow'";

if(checkisset()) {

	$value   = $_POST['value'];
    $action  = $_POST['action'];
	$table   = $_POST['table'];
	$order   = $_POST['order'];
	$consoleFilters = $_POST['consoleFilters'];
	$genreFilters   = $_POST['genreFilters'];
	$yearFilters    = $_POST['yearFilters'];
	$starFilters    = $_POST['starFilters'];
	$priceFilters   = $_POST['priceFilters'];
	$staffFilters   = $_POST['staffFilters'];
	
    switch($action) {
        case 'gotoPage'    : gotoPage($value, $table, $order, $consoleFilters, $genreFilters, $yearFilters, $starFilters, $priceFilters, $staffFilters); break;
		case 'getLastPage' : getLastPage($table); break;
    }
	
} else echo mysql_error;

function checkisset() {
	
	if(!isset($_POST['value']))          {echo "checkisset1";  return false;}
	if(!isset($_POST['action']))         {echo "checkisset2";  return false;}
	if(!isset($_POST['table']))          {echo "checkisset3";  return false;}
	if(!isset($_POST['order']))          {echo "checkisset4";  return false;}
	if(!isset($_POST['consoleFilters'])) {echo "checkisset5";  return false;}
	if(!isset($_POST['genreFilters']))   {echo "checkisset6";  return false;}
	if(!isset($_POST['yearFilters']))    {echo "checkisset7";  return false;}
	if(!isset($_POST['starFilters']))    {echo "checkisset8";  return false;}
	if(!isset($_POST['priceFilters']))   {echo "checkisset9";  return false;}
	if(!isset($_POST['staffFilters']))   {echo "checkisset10"; return false;}
	
	return true;
}

function gotoPage($index, $table, $order, $consoleFilters, $genreFilter, $yearFilters, $starFilters, $priceFilters, $staffFilters) {
	
	$resultsStartNo = 9*$index;
	$resultsToShow  = 9;
	$query = generateQuery($table, $order, $consoleFilters, $genreFilter, $yearFilters, $starFilters, $priceFilters, $staffFilters, $resultsStartNo, $resultsToShow);
	//$query = "SELECT * FROM `contentnews_table` ORDER BY `id` DESC LIMIT $resultsStartNo, $resultsToShow";
	
	$content = array();
	$html;
	
	if($query_run = mysql_query($query)) {
		while($query_row = mysql_fetch_assoc($query_run)) {
			$html = $query_row['content'];
			echo $html;
		}
	} else die("Agh! Looks like we can't find our games!");
	
}

function getLastPage($table) {
	
	$resultsToShow = 9;
	$query = "SELECT * FROM $table";
	
	if($query_run = mysql_query($query)) {
		$query_row_total = mysql_num_rows($query_run);
		$result = ceil(($query_row_total)/$resultsToShow);
		echo $result;
	} else die("Agh! Looks like we can't find our games!");

}

function generateQuery($table, $order, $consoleFilters, $genreFilters, $yearFilters, $starFilters, $priceFilters, $staffFilters, $start, $results) {
	
	$queryWhere = array();
	$queryWhere[0] = ""; //CONSOLE
	$queryWhere[1] = ""; //GENRE
	$queryWhere[2] = ""; //YEAR
	$queryWhere[3] = ""; //STARS
	$queryWhere[4] = ""; //PRICE
	$queryWhere[5] = ""; //STAFF
	
	//SELECT table
	$query = "SELECT * FROM $table ";
	//Select relevant results
	
	if($consoleFilters[0] != "") {
		//CONSOLE FILTERS
		$queryWhere[0].="(consoles LIKE ";
		for($i=0; $i<count($consoleFilters); $i++) {
			$queryWhere[0].=("'%;".$consoleFilters[$i].";%'");
			if($i<count($consoleFilters)-1) {$queryWhere[0].=" OR consoles LIKE ";}
			else {$queryWhere[0].=") ";}
		}
	}
	
	if($genreFilters[0] != "") {
		//GENRE FILTERS
		$queryWhere[1].="(genres LIKE ";
		for($i=0; $i<count($genreFilters); $i++) {
			$queryWhere[1].=("'%;".$genreFilters[$i].";%'");
			if($i<count($genreFilters)-1) {$queryWhere[1].=" OR genres LIKE ";}
			else {$queryWhere[1].=") ";}
		}
	}
	
	if($yearFilters[0] != "") {
		//YEAR FILTERS
		$queryWhere[2].="(year";
		for($i=0; $i<count($yearFilters); $i++) {
			if(strpos($yearFilters[$i],'pre') !== false) {$queryWhere[2].="<="+substr($yearFilters[$i], 3);}
			else {$queryWhere[2].=( "=".(string)$yearFilters[$i] );}
			
			if($i<count($yearFilters)-1) {$queryWhere[2].=" OR year";}
			else {$queryWhere[2].=") ";}
		}
	}
	
	if($starFilters[0] != "") {
		//STAR FILTERS
		$queryWhere[3].="(stars=";
		for($i=0; $i<count($starFilters); $i++) {
			$queryWhere[3].=( (string)$starFilters[$i] );
			if($i<count($starFilters)-1) {$queryWhere[3].=" OR star=";}
			else {$queryWhere[3].=") ";}
		}
	}
	
	if($priceFilters[0] != array("", "", "")) {
		//PRICE FILTERS
		$queryWhere[4].="((price";
		for($i=0; $i<count($priceFilters); $i++) {
			//priceFilter = [operator, low-limit, high-limit] (check getContentFilters.js for more info)
			switch($priceFilters[$i][0]) {
				
				case "=="  : $queryWhere[4].="=".$priceFilters[$i][1]; break;
				
				case "!="  : $queryWhere[4].="!=".$priceFilters[$i][1]; break;
				
				case ">=<" : $queryWhere[4].=">=".$priceFilters[$i][1]." AND price<=".$priceFilters[$i][2]; break;
				
				case "><"  : $queryWhere[4].=">".$priceFilters[$i][1]." AND price<".$priceFilters[$i][2]; break;
				
				case ">="  : $queryWhere[4].=">=".$priceFilters[$i][1]; break;
				
				case ">"   : $queryWhere[4].=">".$priceFilters[$i][1]; break;
				
				case "<=>" : $queryWhere[4].="<=".$priceFilters[$i][1]." AND price>=".$priceFilters[$i][2]; break;
				
				case "<>"  : $queryWhere[4].="<".$priceFilters[$i][1]." AND price>".$priceFilters[$i][2]; break;
				
				case "<="  : $queryWhere[4].="<=".$priceFilters[$i][2]; break;
				
				case "<"   : $queryWhere[4].="<".$priceFilters[$i][2]; break;
			}
		
			
			if($i<count($priceFilters)-1) {$queryWhere[4].=") OR (price";}
			else {$queryWhere[4].=")) ";}
		}
	}
	
	//STAFF FILTERS
	if($staffFilters == "true") {$queryWhere[5].="AND staff=true ";}

	//JOIN QUERYWHERE
	$tempString = "";
	for($i=0; $i<count($queryWhere); $i++) {
		if($queryWhere[$i] != "") {
			if($tempString != "") {$tempString.="AND ";}
			$tempString.=$queryWhere[$i];
		}
	}
	if($tempString != "") {$query.="WHERE ".$tempString;}
	
	$query.= "ORDER BY $order ";       //ORDER
	$query.="LIMIT $start, $results";  //LIMIT
	
	return $query;
	
}

?>