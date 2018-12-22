<?php 
	 $pic_name = $_FILES['pic']['name']; 
	 $tmp_name = $_FILES['pic']['tmp_name']; 
	 $location = 'images/';
	
	move_uploaded_file($tmp_name, $location.$pic_name); 
?>

<form action="form.php" method="post" enctype="multipart/form-data">
	<input type="file" name="pic">
	<input type="submit" name="upload" value="Upload">
</form>