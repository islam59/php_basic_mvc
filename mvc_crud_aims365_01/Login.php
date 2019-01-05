<?php /*
	session_start(); 
	if(isset($_SESSION['username'])){
		header('Location:index.php'); 
	}*/
?>
<?php 
  include 'mvc-FRAMEWORK/Configuration/config.php';
  include 'mvc-FRAMEWORK/Library/Database.php';

  $DB = new Database(); 
?>

<?php 
	if(isset($_POST['login'])){
		$username = $_POST['username']; 
		$password = $_POST['password']; 

		$login_qry = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
		
		$login_result = $DB->select($login_qry); 


		if($login_result){
			$userdata = $login_result->fetch_assoc(); 

			$_SESSION['username'] = $userdata['username']; 
			$_SESSION['status'] = $userdata['status']; 
			header('Location:Login.php'); 
		}else{
			$msg = 'username or password invalid'; 
		}
	}
?>
<h1>Login Form</h1>

<form action="Login.php" method="post">
	Username: <input type="text" name="username"><br/><br/>
	Password: <input type="password" name="password"><br/><br/>
	<input type="submit" name="login" value="Login">
	<?php if(isset($msg)){ echo $msg; }?>
</form>

