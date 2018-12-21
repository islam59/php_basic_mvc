<?php 
	include 'mvc-FRAMEWORK/Configuration/config.php';
	include 'mvc-FRAMEWORK/Library/Database.php';
	$db = new Database(); 
?>
<?php 
	if(isset($_POST['upload'])){

		$img_name = $_FILES["up_image"]["name"];
		$img_temp = $_FILES["up_image"]["tmp_name"];
		
		$target_file = '';

		$qry = "INSERT INTO tb_profile (profile_image) VALUES ('$img_name')";
		$result = $db->insert($qry); 
		if($result){
			move_uploaded_file($img_temp,$target_file.$img_name);
			echo 'Upload successfully !';
		}
	}
?>

<form action="index.php" method="post" enctype="multipart/form-data">
	<input type="file" name="up_image"/>
	<input name="upload" type="submit" value="Upload">
</form>

<hr/>

<?php 
	$img_qry = "SELECT * FROM tb_profile";
	$result = $db->select($img_qry); 
	if($result){
		while($data = $result->fetch_array()){
?>
<div style="width:300px; height:300px; overflow: hidden; float:left; margin:5px; ">
	<img src="<?php echo $data['profile_image']; ?>" style="width:100%; height:300px; ">
</div>
<?php 
		}
	}
?>

