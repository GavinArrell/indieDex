<?php
require 'core.inc.php';
require 'connect.inc.php';

//START
if(!isset($_GET['table']))          {echo mysqli_error; return false;} else {$table  = $_GET['table'];  } //VITAL

if(!isset($_GET['index']))          {$index          = 0;       } else {$index          = $_GET['index'];          }
if(!isset($_GET['order']))          {$order          = "";      } else {$order          = $_GET['order'];          }

if(!isset($_GET['consoleFilters'])) {$consoleFilters = "";      } else {$consoleFilters = $_GET['consoleFilters']; }
if(!isset($_GET['genreFilters']))   {$genreFilters   = "";      } else {$genreFilters   = $_GET['genreFilters'];   }
if(!isset($_GET['yearFilters']))    {$yearFilters    = "";      } else {$yearFilters    = $_GET['yearFilters'];    }
if(!isset($_GET['starFilters']))    {$starFilters    = "";      } else {$starFilters    = $_GET['starFilters'];    }
if(!isset($_GET['priceFilters']))   {$priceFilters   = "";      } else {$priceFilters   = $_GET['priceFilters'];   }
if(!isset($_GET['staffFilters']))   {$staffFilters   = "";      } else {$staffFilters   = $_GET['staffFilters'];   }

if(!isset($_GET['titleSearch']))    {$titleSearch    = "";      } else {$titleSearch    = $_GET['titleSearch'];    }

$start   = 9*$index;
$results = 9;
$query = generateQuery($table, $order, $consoleFilters, $genreFilters, $yearFilters, $starFilters, $priceFilters, $staffFilters, $titleSearch, $start, $results);

gotoPage($query."LIMIT $start, $results", getLastPage($query));

function gotoPage($query, $lastPage) {
	
	$html = "";	
	
	if($query_run = mysql_query($query)) {
		while($query_row = mysql_fetch_assoc($query_run)) {
			$html.=$query_row['content'];
		}
	} else die("Agh! Looks like we can't find our games!");
	
	echo json_encode(array($html, $lastPage));
}

function getLastPage($query) {
	if($query_run = mysql_query($query)) {
		$query_row_total = mysql_num_rows($query_run);
		$result = ceil(($query_row_total)/9);
		return $result;
	} else die("Agh! Looks like we can't find our games!");

}

function generateQuery($table, $order, $consoleFilters, $genreFilters, $yearFilters, $starFilters, $priceFilters, $staffFilters, $titleSearch, $start, $results) {
	
	$queryWhere = array();
	$queryWhere[0] = ""; //CONSOLE
	$queryWhere[1] = ""; //GENRE
	$queryWhere[2] = ""; //YEAR
	$queryWhere[3] = ""; //STARS
	$queryWhere[4] = ""; //PRICE
	$queryWhere[5] = ""; //STAFF
	$queryWhere[6] = ""; //TITLE
	
	//SELECT table
	$query = "SELECT * FROM $table ";
	//Select relevant results
	
	if(!empty($consoleFilters)) {
		//CONSOLE FILTERS
		$queryWhere[0].="(consoles LIKE ";
		for($i=0; $i<count($consoleFilters); $i++) {
			$queryWhere[0].=("'%;".$consoleFilters[$i].";%'");
			if($i<count($consoleFilters)-1) {$queryWhere[0].=" OR consoles LIKE ";}
			else {$queryWhere[0].=") ";}
		}
	}
	
	if(!empty($genreFilters)) {
		//GENRE FILTERS
		$queryWhere[1].="(genres LIKE ";
		for($i=0; $i<count($genreFilters); $i++) {
			$queryWhere[1].=("'%;".$genreFilters[$i].";%'");
			if($i<count($genreFilters)-1) {$queryWhere[1].=" OR genres LIKE ";}
			else {$queryWhere[1].=") ";}
		}
	}
	
	if(!empty($yearFilters)) {
		//YEAR FILTERS
		$queryWhere[2].="(year";
		for($i=0; $i<count($yearFilters); $i++) {
			if(strpos($yearFilters[$i],'pre') !== false) {$queryWhere[2].="<="+substr($yearFilters[$i], 3);}
			else {$queryWhere[2].=( "=".(string)$yearFilters[$i] );}
			
			if($i<count($yearFilters)-1) {$queryWhere[2].=" OR year";}
			else {$queryWhere[2].=") ";}
		}
	}
	
	if(!empty($starFilters)) {
		//STAR FILTERS
		$queryWhere[3].="(stars=";
		for($i=0; $i<count($starFilters); $i++) {
			$queryWhere[3].=( (string)$starFilters[$i] );
			if($i<count($starFilters)-1) {$queryWhere[3].=" OR star=";}
			else {$queryWhere[3].=") ";}
		}
	}
	
	if(!empty($priceFilters)) {
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
	
	//TITLE SEARCH
	if($titleSearch != "") {$queryWhere[6].="title LIKE '%".$titleSearch."%' ";}

	//JOIN QUERYWHERE
	$tempString = "";
	for($i=0; $i<count($queryWhere); $i++) {
		if($queryWhere[$i] != "") {
			if($tempString != "") {$tempString.="AND ";}
			$tempString.=$queryWhere[$i];
		}
	}
	if($tempString != "") {$query.="WHERE ".$tempString;}
	
	if($order != "") {$query.= "ORDER BY $order ";} //ORDER
		
	return $query;
	
}

?>