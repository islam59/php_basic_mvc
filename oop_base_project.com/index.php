<?php 
	if(!isset($_GET['page'])){
		header('Location:?page=home'); 
	}else{
		$pg = $_GET['page'];
	}
?>
<?php 
include 'student.php';
$obj = new student(); 

if($pg=='home'){
	$obj->home(); 
	
}elseif($pg=='about'){
	$obj->about(); 
	
}elseif($pg=='contact'){
	$obj->contact(); 
}else{
	$obj->denied();
}
	
	
	

?>