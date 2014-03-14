<?php
	
	require_once 'connect.inc.php';
	include 'php/updateDB.php';
	
	if(isset($_POST['user'])&&!empty($_POST['user'])
	&& isset($_POST['email'])&&!empty($_POST['email'])
	&& isset($_POST['pass'])&&!empty($_POST['pass'])
	&& isset($_POST['confirmpass'])&&!empty($_POST['confirmpass'])){
		
		$user  = mysql_real_escape_string($_POST['user']);
		$email = $_POST['email'];
		$pass  = $_POST['pass'];
		$cpass = $_POST['confirmpass'];
		
		if(strlen($user)<4 || strlen($user)>18) {echo 1; goto exitCheck;}
		if(strlen($pass)<6 || strlen($pass)>32) {echo 2; goto exitCheck;}
		if($pass != $cpass) {echo 3; goto exitCheck;}
		
		$pass = md5($pass);
		
		$name = "";
		$surname = "";
		$birthday = "";
		$location = "";
		
		if(isset($_POST['name'])&&!empty($_POST['name'])) {
			$name = $_POST['name'];
			if(!ctype_alpha($name)) {goto skipName;}
			$name = ucfirst(strtolower($name));
			
		}skipName:
		
		if(isset($_POST['surname'])&&!empty($_POST['surname'])) {
			$surname = $_POST['surname'];
			if(!ctype_alpha($surname)) {goto skipSurname;}
			$surname = ucfirst(strtolower($surname));
			
		}skipSurname:
		
		if(isset($_POST['day'])&&!empty($_POST['day'])
		&& isset($_POST['month'])&&!empty($_POST['month'])
		&& isset($_POST['year'])&&!empty($_POST['year'])){
			
			$day = $_POST['day'];
			$month = $_POST['month'];
			$year = $_POST['year'];
			
			if(strlen($day) != 2 || !is_numeric($day)) {goto skipBirthday;}
			if(strlen($month) != 2 || !is_numeric($month)) {goto skipBirthday;}
			if(strlen($year) != 4 || !is_numeric($year)) {goto skipBirthday;}
			
			$birthday = $year.'-'.$month.'-'.$day;
			
		}skipBirthday:
		
		if(isset($_POST['location'])&&!empty($_POST['location'])) {
			$location = $_POST['location'];
		}
		
		$values[0] = $user;
		$values[1] = $pass;
		$values[2] = $email;
		$values[3] = 0;
		$values[4] = $name;
		$values[5] = $surname;
		$values[6] = "Tell us something about yourself!";
		$values[7] = 0;
		$values[8] = "";
		$values[9] = "";
		$values[10] = $birthday;
		$values[11] = $location;
		$values[12] = "";
		
		registerNewUser($values);
	}
	
	exitCheck:
	header('Location: index.php');
	
?>