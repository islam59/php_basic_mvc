<?php 
	include 'mvc-FRAMEWORK/Configuration/config.php';
	include 'mvc-FRAMEWORK/Library/Database.php';
	$db = new Database(); 
?>
<?php 
	$reg_id = $_POST['reg_id']; 
	foreach($_POST['name'] as $name)
	{ 
		$qry = "INSERT INTO tb_user(reg_id,username) VALUES ('$reg_id','$name')"; 
		$result = $db->insert($qry); 
	}

?>
<?php 
	echo '<h1>Multiple Data Upload !</h1><hr/>';
?>

<form action="index.php" method="post">
	<input type="text" name="reg_id" placeholder="Id"><br/><br/>
	<input type="text" name="name[]" placeholder="Name 1"><br/><br/>
	<input type="text" name="name[]" placeholder="Name 2"><br/><br/>
	<input type="text" name="name[]" placeholder="Name 3"><br/><br/>
	<input type="text" name="name[]" placeholder="Name 4"><br/><br/>
	<input type="text" name="name[]" placeholder="Name 5"><br/><br/>
	<input type="text" name="name[]" placeholder="Name 6"><br/><br/>
	<input type="submit" name="submit" value="Save">
</form>