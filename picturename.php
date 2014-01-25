<?php

function changeName(){
// Your file name you are uploading
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
$_SESSION['pic']=$path;
if($_FILES['file'] != null)
{
if(copy($_FILES['file']['tmp_name'], $path))
{
return true;
echo "Successful<BR/>";

//$new_file_name = new file name
//$HTTP_POST_FILES['ufile']['size'] = file size
//$HTTP_POST_FILES['ufile']['type'] = type of file
echo "File Name :".$new_file_name."<BR/>";
echo "File Size :".$_FILES['file']['size']."<BR/>";
echo "File Type :".$_FILES['file']['type']."<BR/>";
}
else
{return false;

}
}}
//changeName();
?>