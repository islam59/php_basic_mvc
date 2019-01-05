<?php 
session_start(); 
	if(isset($_SESSION['name'])){ 
		header('Location:Home.php'); 
	}

	if(isset($_POST['login'])){
		$name = $_POST['name']; 
		$_SESSION['name'] = $name; 
		header('Location:index.php'); 
	}
?>
<h1>Index Page</h1>
<form action="" method="post">
	Name : <input type="text" name="name">
	<input type="submit" value="Login" name="login">
</form>
