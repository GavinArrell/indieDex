<?php
function addContent(){
if (isDev()){
	?>
		<div class="contentBoxContainer">
			<br>
			<h3>ADD CONTENT</h3><br>
			<div class="contentMore" style="padding:5px; margin:5px;">
				
				<form action="uploadContent.php" method="post"
				enctype="multipart/form-data">
				<label for="file">Image</label>
				<input type="file" name="file" id="file"><br>
				
		
				<label for="file">Title</label><br>
   				<textarea style=" resize:none; height:16px; width:100%; margin-bottom:16px;" type="text" name="name"></textarea><br>
				
				
				<label for="file">Introduction</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="name"></textarea><br>
				
				
				<label for="file">Read More Section</label><br>
   				<textarea style=" resize:none; height:100px; width:100%; margin-bottom:16px;" type="text" name="name"></textarea>
				
				
				
				
				<input type="submit" name="submit" value="Submit">
			
			</div>
			<p class="readMore">Read More</p>
		</div>
	<?php
	return;
}else{return false;}
}
?>