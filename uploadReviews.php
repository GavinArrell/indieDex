<?php

require 'core.inc.php';
require 'connect.inc.php';

if (empty($_FILES['file']['name'])){header('Location: review.php');}else{
$file_name = $_FILES['file']['name'];

// random 4 digit to add to our file name
// some people use date and time in stead of random digit
$random_digit=rand(0000,999999);

//combine random digit to you file name to create new file name
//use dot (.) to combile these two variables

$new_file_name=$random_digit.$file_name;

//set where you want to store files
//in this example we keep file in folder upload
//$new_file_name = new upload file name
//for example upload file name cartoon.gif . $path will be upload/cartoon.gif
$path= "img/uploads/".$new_file_name;
if($_FILES['file'] != null)
{
	if(copy($_FILES['file']['tmp_name'], $path))
	{
	}else{}
}

$title = $_POST['title'];
$intro = $_POST['introduction'];
$title1 = $_POST['title1'];
$intro1 = $_POST['introduction1'];
$title2 = $_POST['title2'];
$intro2 = $_POST['introduction2'];
$title3 = $_POST['title3'];
$intro3 = $_POST['introduction3'];
$title4 = $_POST['title4'];
$intro4 = $_POST['introduction4'];
$title5 = $_POST['title5'];
$intro5 = $_POST['introduction5'];
$title6 = $_POST['title6'];
$intro6 = $_POST['introduction6'];
$title7 = $_POST['title7'];
$intro7 = $_POST['introduction7'];
$title8 = $_POST['title8'];
$intro8 = $_POST['introduction8'];
$title9 = $_POST['title9'];
$intro9 = $_POST['introduction9'];
$title10 = $_POST['title10'];
$intro10 = $_POST['introduction10'];



if(!empty($path) && !empty($title) && !empty($intro)){
	
$title = addslashes($title);
$intro = addslashes($intro);
$title1 = addslashes($title1);
$intro1 = addslashes($intro1);
$title2 = addslashes($title2);
$intro2 = addslashes($intro2);
$title3 = addslashes($title3);
$intro3 = addslashes($intro3);
$title4 = addslashes($title4);
$intro4 = addslashes($intro4);
$title5 = addslashes($title5);
$intro5 = addslashes($intro5);
$title6 = addslashes($title6);
$intro6 = addslashes($intro6);
$title7 = addslashes($title7);
$intro7 = addslashes($intro7);
$title8 = addslashes($title8);
$intro8 = addslashes($intro8);
$title9 = addslashes($title9);
$intro9 = addslashes($intro9);
$title10 = addslashes($title10);
$intro10 = addslashes($intro10);

$price = $_POST['price'];
if($price >= 0){}else{$price = ''; }

$console = '';
$genre = '';
$star = '';
$staff = '';
$year ='';

if(isset($_POST['pc'])){$console = $console.';pc;';}
if(isset($_POST['mac'])){$console = $console.';mac;';}
if(isset($_POST['linux'])){$console = $console.';linux;';}
if(isset($_POST['ps4'])){$console = $console.';ps4;';}
if(isset($_POST['ps3'])){$console = $console.';ps3;';}
if(isset($_POST['xboxone'])){$console = $console.';xboxone;';}
if(isset($_POST['xbox360'])){$console = $console.';xbox360;';}
if(isset($_POST['wiiu'])){$console = $console.';wiiu;';}
if(isset($_POST['wii'])){$console = $console.';wii;';}
if(isset($_POST['ios'])){$console = $console.';ios;';}
if(isset($_POST['android'])){$console = $console.';android;';}

if(isset($_POST['action'])){$genre = $genre.';action;';}
if(isset($_POST['adventure'])){$genre = $genre.';adventure;';}
if(isset($_POST['music'])){$genre = $genre.';music;';}
if(isset($_POST['mmo'])){$genre = $genre.';mmo;';}
if(isset($_POST['puzzle'])){$genre = $genre.';puzzle;';}
if(isset($_POST['rpg'])){$genre = $genre.';rpg;';}
if(isset($_POST['shooter'])){$genre = $genre.';shooter;';}
if(isset($_POST['action'])){$genre = $genre.';sport;';}
if(isset($_POST['strategy'])){$genre = $genre.';strategy;';}

if(isset($_POST['1'])){$star = '1';}
if(isset($_POST['2'])){$star = '2';}
if(isset($_POST['3'])){$star = '3';}
if(isset($_POST['4'])){$star = '4';}
if(isset($_POST['5'])){$star = '5';}

if(isset($_POST['staff'])){$staff = 'staff';}

if(isset($_POST['pre2010'])){$year = 'pre2010';}
if(isset($_POST['2011'])){$year = '2011';}
if(isset($_POST['2012'])){$year = '2012';}
if(isset($_POST['2013'])){$year = '2013';}
if(isset($_POST['2014'])){$year = '2014';}
if(isset($_POST['beta'])){$year = 'beta';}

$content = '<div class="contentBoxContainer"><div class="contentBoxPicture"><img src="'.$path.'"/></div><div class="contentBoxText"><h2>'.$title.'</h2><p>'.$intro.'</p></div><div class="contentMore"><h3>';
$content = $content.$title1.'</h3><p>'.$intro1.'</p><h3>'.$title2.'</h3><p>'.$intro2.'</p><h3>'.$title3.'</h3><p>'.$intro3.'</p><h3>'.$title4.'</h3><p>'.$intro4.'</p><h3>'.$title5.'</h3><p>'.$intro5.'</p><h3>';
$content = $content.$title6.'</h3><p>'.$intro6.'</p><h3>'.$title7.'</h3><p>'.$intro7.'</p><h3>'.$title8.'</h3><p>'.$intro8.'</p><h3>'.$title9.'</h3><p>'.$intro9.'</p><h3>'.$title10.'</h3><p>'.$intro10.'</p>';
$content = $content.'</div><p class="readMore">Read More</p></div>';

$content = str_replace("<h3></h3>", "", $content);
$content = str_replace("<p></p>", "", $content);

$query = "INSERT INTO contentreviews_table (title, content, consoles, genres, year, stars, price, staff)
VALUES ('$title','$content', '$console','$genre','$year','$star','$price','$staff')";
if	($query_run = mysql_query($query)){
									header('Location: review.php');
								}else{
									echo 'Sorry, we could not process your request. Try again later.';
								}


}else{echo'Error - Required Fields Left Blank';}}
?>