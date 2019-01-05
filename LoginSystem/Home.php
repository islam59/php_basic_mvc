<?php 
	session_start(); 
	if(!isset($_SESSION['name'])){
		header('Location:index.php'); 
	}
?>

<h1>Home Page</h1>

<?php 
	echo $_SESSION['name']; 
?>

<a href="destroy.php">Logout</a>