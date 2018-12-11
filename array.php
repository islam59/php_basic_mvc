<?php 
	echo '<center><h1 style="border-top:2px solid #057; border-bottom:2px solid #057; border-radius:5%;">ARRAY in PHP !</h1></center>';
?>

<?php 
$student = array('Masud','Saiful','Mehedi','MAHIN','SHOHAGI','ASA','Sornil','vuila gesi','mone porse','abdullah');

	$as = count($student); 

	for($i=0; $i<$as; $i++){
		echo $student[$i]; echo '<br/>';
	}

?>

<?php /*
	$country1 = array('name'=>'Bangladesh','68','147570'); 

	echo '<pre>';
	var_dump($country1);
	*/
?>

<?php /*
	$country1 = array('Bangladesh','68','147570'); 
	$country2 = array('India','680','147570000'); 
	$country3 = array('Pakistan','268','147570000'); 
	$country4 = array('Uganda','8','147570454'); 
	
	echo $country1[0].' &mdash; '.$country2[0].' &mdash; '.$country3[0];
	
	*/
?>