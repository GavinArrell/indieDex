<?php
function dVdA(){
	
if(isFreemium()){ ?>
</div>
	<div class="rightContainer">
			<div style=" width:600px; background-color:white; opacity:0.9; padding:5px; margin:auto; margin-top:5px;">
				<a  href="https://donate.childsplaycharity.org/">
				<p align="center">UPGRADE TO PREMIUM</p><img style="width:100%;"src="img/childsplay.png"/></a>
			</div>
			
			
		<div style=" width:600px; background-color:white; opacity:0.9; padding:5px; margin:auto; margin-top:5px;">
			<p align="center">CUSTOMISE ACCOUNT</p>
			<form action="uploadpicture.php" method="post"
				enctype="multipart/form-data">
				<label for="file">Profile Picture</label><br>
				<input type="file" name="file" id="file"><br>
				<input type="submit" name="submit" value="Submit">
		</form><br><br>
		
		<form method="post" action="uploadbio.php">
			<label for="file">Bio</label><br>
   			<textarea style="height:100px; width:300px;" type="text" name="name"></textarea><br>
  	 	 	<input type="submit" value="Submit">
		</form>
		</div>
	</div>
<div>
<?php ;}

else if(isPremium()){ ?>
</div>
	<div class="rightContainer">
		<div style=" width:600px; background-color:white; opacity:0.9; padding:5px; margin:auto; margin-top:5px;">
			<p align="center">CUSTOMISE ACCOUNT</p>
			<form action="uploadpicture.php" method="post"
				enctype="multipart/form-data">
				<label for="file">Profile Picture</label><br>
				<input type="file" name="file" id="file"><br>
				<input type="submit" name="submit" value="Submit">
		</form><br><br>
		
		<form method="post" action="uploadbio.php">
			<label for="file">Bio</label><br>
   			<textarea style="height:100px; width:300px;" type="text" name="name"></textarea><br>
  	 	 	<input type="submit" value="Submit">
		</form>
		</div>

	</div>
<div>
<?php ;}

else if(isMod()){?>
</div>
	<div class="rightContainer">
		<div style=" width:600px; background-color:white; opacity:0.9; padding:5px; margin:auto; margin-top:5px;">
			<p align="center">CUSTOMISE ACCOUNT</p>
			<form action="uploadpicture.php" method="post"
				enctype="multipart/form-data">
				<label for="file">Profile Picture</label><br>
				<input type="file" name="file" id="file"><br>
				<input type="submit" name="submit" value="Submit">
		</form><br><br>
		
		<form method="post" action="uploadbio.php">
			<label for="file">Bio</label><br>
   			<textarea style="height:100px; width:300px;" type="text" name="name"></textarea><br>
  	 	 	<input type="submit" value="Submit">
		</form>
		</div>

	</div>
<div>
<?php ;}

else if(isDev()){?>
</div>
	<div class="rightContainer">
		<div style=" width:600px; background-color:white; opacity:0.9; padding:5px; margin:auto; margin-top:5px;">
			<p align="center">CUSTOMISE ACCOUNT</p>
			<form action="uploadpicture.php" method="post"
				enctype="multipart/form-data">
				<label for="file">Profile Picture</label><br>
				<input type="file" name="file" id="file"><br>
				<input type="submit" name="submit" value="Submit">
		</form><br><br>
		
		<form method="post" action="uploadbio.php">
			<label for="file">Bio</label><br>
   			<textarea style="height:100px; width:300px;" type="text" name="name"></textarea><br>
  	 	 	<input type="submit" value="Submit">
		</form>
		</div>
		<div style="height:100px; width:600px; background-color:white; opacity:0.9; padding:5px; margin:auto; margin-top:5px;">
			ADD CONTENT
		</div>
	</div>
<div>
<?php ;}

}

function isDev(){
	@$status = $_SESSION['status'];
	@$username = $_SESSION['username'];	
	if($status==3 &&  !$username == 0){return true;}
	else {return false;}
}

function isMod(){
	@$status = $_SESSION['status'];
	@$username = $_SESSION['username'];	
	if($status==2 &&  !$username == 0){return true;}
	else{return false;}
}

function isPremium(){
	@$status = $_SESSION['status'];
	@$username = $_SESSION['username'];	
	if($status==1 &&  !$username == 0){return true;}
	else{return false;}
}

function isFreemium(){
	@$status = $_SESSION['status'];
	@$username = $_SESSION['username'];	
	if($status==0 &&  !$username == 0){return true;}
	else{return false;}
}
?>