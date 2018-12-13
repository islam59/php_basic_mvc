<?php 
	if(!isset($_GET['ppgg345'])){
		header('Location:?ppgg345=657egcbgo');
	}else{
		$pg = $_GET['ppgg345']; 
	}
?>

<?php 
	include 'Dashboard.php';
	$obj = new Dashboard(); 
	
	if(isset($pg)){
		if($pg=='657egcbgo'){
			$obj->landingpage(); 
		}elseif($pg=='5456878dfasdff878sa7f8as7f'){
			$obj->aboutpage();
		}elseif($pg=='consdfasdftacasdfadsftasdfadsf41545asd4f54adsf54asd5f'){
			$obj->contactpage();
		}else{
			echo 'Dur ho soitan..';
		}
	}
?>