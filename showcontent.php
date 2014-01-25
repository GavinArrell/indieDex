<?php
require 'core.inc.php';
require 'connect.inc.php';

$resultsStartNo = 0;
$resultsToShow  = 10;

$query = "SELECT * FROM `content-index_table` ORDER BY `id` DESC LIMIT '$resultsStartNo', '$resultsToShow'";

if(checkisset()) {

	$value   = $_POST['value'];
    $action  = $_POST['action'];
	$order   = $_POST['order'];
	$consoleFilters = $_POST['consoleFilters'];
	$genreFilters   = $_POST['genreFilters'];
	$yearFilters    = $_POST['yearFilters'];
	$starFilters    = $_POST['starFilters'];
	$priceFilters   = $_POST['priceFilters'];
	$staffFilters   = $_POST['staffFilters'];
	
    switch($action) {
        case 'gotoPage'    : gotoPage($value, $order, $consoleFilters, $genreFilters, $yearFilters, $starFilters, $priceFilters, $staffFilters); break;
		case 'getLastPage' : getLastPage(); break;
    }
	
} else echo mysql_error;

function checkisset() {
	if(!isset($_POST['value']))          {return false;}
	if(!isset($_POST['action']))         {return false;}
	if(!isset($_POST['order']))          {return false;}
	if(!isset($_POST['consoleFilters'])) {return false;}
	if(!isset($_POST['genreFilters']))   {return false;}
	if(!isset($_POST['yearFilters']))    {return false;}
	if(!isset($_POST['starFilters']))    {return false;}
	if(!isset($_POST['priceFilters']))   {return false;}
	if(!isset($_POST['staffFilters']))   {return false;}
	
	return true;
}

function gotoPage($index, $order, $consoleFilters, $genreFilter, $yearFilters, $starFilters, $priceFilters, $staffFilters) {
	
	$resultsStartNo = 10*$index;
	$resultsToShow  = 10;
	$query = generateQuery($order, $consoleFilters, $genreFilter, $yearFilters, $starFilters, $priceFilters, $staffFilters, $resultsStartNo, $resultsToShow);
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

function getLastPage() {
	
	$resultsToShow = 10;
	$query = "SELECT COUNT(*) FROM `contentnews_table`";
	
	if($query_run = mysql_query($query)) {
		$result = ceil(($query_run)/$resultsToShow);
		echo $result;
	} else die("Agh! Looks like we can't find our games!");

}

function generateQuery($order, $consoleFilters, $genreFilters, $yearFilters, $starFilters, $priceFilters, $staffFilters, $start, $results) {
	
	//Order query
	$query = "SELECT * FROM `contentnews_table` ORDER BY "+ $order +" ";
	
	//Select relevant results
		//CONSOLE FILTERS
		$query."WHERE (consoles LIKE ";
		for($i=0; $i<count($consoleFilters); $i++) {
			$query."`%;"+$consoleFilters[$i]+";%`";
			if($i<count($consoleFilters)-1) {$query." OR consoles LIKE ";}
			else {$query.") ";}
		}
		
		//GENRE FILTERS
		$query."AND (genres LIKE ";
		for($i=0; $i<count($genreFilters); $i++) {
			$query."`%;"+$genreFilters[$i]+";%`";
			if($i<count($genreFilters)-1) {$query." OR genres LIKE ";}
			else {$query.") ";}
		}
		
		//YEAR FILTERS
		$query."AND (year";
		for($i=0; $i<count($yearFilters); $i++) {
			if(strpos($yearFilters[$i],'pre') !== false) {$query."<="+substr($yearFilters[$i], 3);}
			else {$query.( "="+(string)$yearFilters[$i] );}
			
			if($i<count($yearFilters)-1) {$query." OR year";}
			else {$query.") ";}
		}
		
		//STAR FILTERS
		$query."OR (stars=";
		for($i=0; $i<count($starFilters); $i++) {
			$query.( (string)$starFilters[$i] );
			if($i<count($starFilters)-1) {$query." OR star=";}
			else {$query.") ";}
		}
		
		//PRICE FILTERS
		$query."OR ((price";
		for($i=0; $i<count($priceFilters); $i++) {
			//priceFilter = [operator, low-limit, high-limit] (check getContentFilters.js for more info)
			switch($priceFilters[$i][0]) {
				
				case "=="  : $query."="+$priceFilters[$i][1]; break;
				
				case "!="  : $query."!="+$priceFilters[$i][1]; break;
				
				case ">=<" : $query.">="+$priceFilters[$i][1]+" AND price<="+$priceFilters[$i][2]; break;
				
				case "><"  : $query.">"+$priceFilters[$i][1]+" AND price<"+$priceFilters[$i][2]; break;
				
				case ">="  : $query.">="+$priceFilters[$i][1]; break;
				
				case ">"   : $query.">"+$priceFilters[$i][1]; break;
				
				case "<=>" : $query."<="+$priceFilters[$i][1]+" AND price>="+$priceFilters[$i][2]; break;
				
				case "<>"  : $query."<"+$priceFilters[$i][1]+" AND price>"+$priceFilters[$i][2]; break;
				
				case "<="  : $query."<="+$priceFilters[$i][2]; break;
				
				case "<"   : $query."<"+$priceFilters[$i][2]; break;
			}
			
			if($i<count($priceFilters)-1) {$query.") AND (price";}
			else {$query.")) ";}
		}
		
		//STAFF FILTERS
		if($staffFilters) {$query."AND staff=true ";}
	
	
	//Limit query
	$query."LIMIT $start, $results";
	
	return $query;
	
}

function arrayInString( $array , $string , $seperator=' ' ){
  $inStringAsArray = explode( $seperator , $string );
  return ( count( array_intersect( $array , $inStringAsArray ) )>0 );
}
?>