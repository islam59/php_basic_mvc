<?php 
	session_start(); 
	if(!isset($_SESSION['name'])){
		header('Location:index.php'); 
	}
?>
<h1>Page of Page</h1>
<?php 
	echo $_SESSION['name']; 
?>

<a href="destroy.php">Session Off</a>