<?php
function dVdA(){
	
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) { ?>
	<link rel="stylesheet" type="text/css" href="css/account.css"/>
	<link rel="stylesheet" type="text/css" href="css/button.css"/>
	<script type='text/javascript' src="js/accountManagement.js"></script>
	
	</div>
	
	<div class="rightContainer">
		
		<div id='accountInfoContainer'>
			
			<div id='accountInfoLeft'>
				<img src="<?php echo $_SESSION['pic']; ?>" id='accountInfoPic'>
			</div>
			
			<div id='accountInfoRight'>
				<h2><?php echo $_SESSION['firstname']." ".$_SESSION['surname']; ?></h2>
				<div id="accountInfoDetails">
					<ul>
						<li>@<?php echo $_SESSION['username']; ?></li>
						<li>Karma: <?php echo $_SESSION['karma']; ?></li>
						<li>Joined: <?php echo $_SESSION['joindate']; ?></li>
					</ul>
					<h3>My Bio</h3>
					<p id="accountInfoBio"><?php echo $_SESSION['bio']; ?></p>
				</div>
			</div>
		</div>
		
		<div id="accountInfoEdit">
			
			<div id="#accountManagementButtonContainer">
				<div class="accountManagementButton" id="1">edit info</div>
				<div class="accountManagementButton" id="2">notifications</div>
				<div class="accountManagementButton" id="3">message board</div>
				<div class="accountManagementButton" id="4">account status</div>
			</div>
			
			<table id="accountInfoEditTable">
				<tr>
					<td>
						<form action="uploadInfoEdit.php" method="post" enctype="multipart/form-data">
							<label for="file">Change Your Profile Picture</label>
							<input type="file" name="file" id="file"><br><br>
							
							<label for="file">Edit Your Bio</label>
			   				<textarea style=" resize:none; height:100px; width:300px;" type="text" name="bio"></textarea><br>
					</td>
					
					<td>
							
					</td>
					
					<td>
							<label for="file">Change Your Password</label>
			   				Old Password:<input style="margin-left:6px;" input type="password" name="oldpw"><br>
			   				New Password:<input type="password" name="newpw"><br>
			   				New Password:<input type="password" name="newpwtwo"><br>
							<br><br>
							<label for="file">Change Your E-mail</label><br>
			   				Change Email<input style="margin-left:8px;" type="text" name="email"><br>
					</td>
				</tr>
				
				<tr>
					<td colspan="3" class="accountManagementSubmit">
							<input type="submit" value="Submit">
						</form>
					</td>
				</tr>
			</table>
			
			<div id="accountStatus">
				
				<!--
				account status
				member since
				pay date
				
				upgrade
				-->
				
				<?php 
				function convertStatus($status) {
					switch($status) {
						case 0 : return "Non-Premimum";
						case 1 : return "Premimum";
						case 2 : return "Moderator";
						case 3 : return "Developer";
					}
				}
				?>
				
				<div id="accountStatusDetailsContainer">
					<table id="accountStatusDetailsTable">
						<tr>
							<td><h3>Account Status: <?php echo convertStatus($_SESSION['status']); ?></h3></td>
							<td><h3>Premium Since: N/A</h3></td>
							<td><h3>Next Pay Date: N/A</h3></td>
						</tr>
					</table>
				</div>
			
				<?php ;}
		
				if(isFreemium()){ ?>
					<div style=" width:600px; background-color:white; opacity:0.9; padding:5px; margin:auto; margin-top:5px;">
						<p align="center">UPGRADE TO PREMIUM</p>
						<form action="changeMembershipStatus.php" method="get">
							<div style=" width:50%; line-height:32px; padding-left:16px;">
								Premium Cost = £1/per month <br>
								Name on Card:<input type="text" name="text" value="" style="float:right;"><br>
								Card Number:<input type="text" name="text" value="" style="float:right;"><br>
								Expiry Date:<input type="text" name="text" value="" style="float:right;"><br>
								CV Number:<input type="text" name="text" value="" style="float:right;"><br>
								<input type="hidden" name="status" value"1">
								<input type="submit" name="submit" value="Submit">
							</div>
						</form>
					</div>
					
				<?php ;} ?>	
				
			</div>
				
		</div>
	</div>
	

<?php }

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