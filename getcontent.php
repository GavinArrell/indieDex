<?php
require 'connect.inc.php';

$q = array($_GET['q']);
$content = array();
$filteredContent = array();

$total_content;

//START FILTERING
filterContent();

function queryPossible($queryStr) {
	if($query_run = mysql_query($queryStr)) {
		if(mysql_num_rows($query_run) == NULL) {return false;}
		else {return true;}
	}
	return false;
}

function filterContent() {
	unset($content);
	unset($filteredContent);
	$content = array();
	$filteredContent = array();
	
	$query = "SELECT * FROM `contentnews_table`";
	if(queryPossible($query)) {
		$row_count = -1;
		while($query_row = mysql_fetch_assoc( mysql_query($query) )) {
				
			$row_count++;
			
			//Gather data for content items (will get html at the end)
			$content[$row_count][0] = $query_row[`id`];
			$content[$row_count][1] = $query_row[`title`];
			$content[$row_count][2] = $query_row[`tags`];
			$content[$row_count][3] = 0; //Relevance
			$content[$row_count][4] = $query_row[`top`];
			$content[$row_count][5] = $query_row[`new`];
			$content[$row_count][6] = $query_row[`hot`];
			$content[$row_count][7] = $query_row[`trending`];
			
			//loop through checkboxes - checking if they're ticked or not (1/0)
			for($i=1; $i<count($q); $i++) {
				if($q[$i] == 1) { //if checkbox is checked then
					if(strpos($content[$row_count][2], $q[$i])) { //check if that box's tag is within the current row of tags (current item)
						$content[$row_count][3]++; //if so then increment relevance of that item
					}
				}
			}
			
			//If the relevance of this row is > 0 then organise it in the content to display
			if($content[$row_count][3] > 0) {organiseContent($content[$row_count]);}
		}
		
		$total_content = $row_count;
		sendContent();
	}
	
}

function organiseContent($item) {
	for($i=0; $i<count($filteredContent); $i++) {
		if($filteredContent[$i][3] == $item[3]) {
			if(prioritiseContent($item, $filteredContent)) {arrayInsertVal($item, $i, $filteredContent); return;}
			continue;
		}
		if($filteredContent[$i][3] < $item[3]) {arrayInsertVal($item, $i, $filteredContent); return;}
	}
}

function organiseContentNoFilter() {
	for($i=0; $i<$total_content; $i++) {
		if($i>0) {
			if(prioritiseIndex($content[$i]) != -1 && prioritiseIndex($content[$i]) != count($filteredContent)) {
				arrayInsertVal($content[$i], prioritiseIndex($content[$i]), $filteredContent);
			}
			else if(prioritiseIndex($content[$i]) != -1 && prioritiseIndex($content[$i]) == count($filteredContent)) {
				array_push($filteredContent, $content[$i]);
			}
		}
		else {
			if(prioritiseIndex($content[$i]) != -1) {
				array_push($filteredContent, $content[$i]);
			}
		}
	}
}

$htmlString;

function sendContent() {
	$htmlString = loadContent();
	
	if(count($filteredContent) == 0) {
		if(checkTagValues()) {organiseContentNoFilter(); $htmlString = loadContent();}
		else {$htmlString = "No Results Found.";} //CHANGE
	}
	
	echo $htmlString;
	mysql_close();
}

function loadContent() {
	$string = "";
	for($i=0; $i<9 && $i<count($filteredContent); $i++) {
		
		$query = "SELECT `content` FROM `contentnews_table` WHERE `id`=`"+$filteredContent[$i][0]+"`";
		if(queryPossible($query)) {
			while($query_row = mysql_fetch_assoc(mysql_query($query))) {
				$string.$query_row['content'];
			}
		}

	}
}

function prioritiseIndex($newItem) {
	if($newItem[$q[0]+4] == -1) {return -1;}
	
	for($i=0; $i<count($filteredContent); $i++) {
		if($newitem[$q[0]+4] <= $filteredContent[$i][$q[0]+4]) {return $i;}
	}
	
	return count($filteredContent);
}

function prioritiseContent($newitem, $oldItem) {
	if($newItem[$q[0]+4] <= $oldItem[$q[0]+4] && $newItem[$q[0]+4] != -1) {return true;}
	else {return false;}
}

function checkTagValues() {
	for($i=1; $i<count($q); $i++) {
		if($q[$i][1] != 0) {return false;}
	}
	
	return true;
}

function arrayInsertVal($val, $index, $array) {
	$newArray = array();
	for($i=0; i<count($array)+1; $i++) {
		if($i == $index) {
			array_push($newArray, $val);
			$i--;
		}
		else {
			array_push($newArray, $array[$i]);
		}
	}
	
	return $newArray;
}

?>