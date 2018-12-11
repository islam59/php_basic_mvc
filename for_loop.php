<?php 
	echo '<center><h1 style="border-top:2px solid #057; border-bottom:2px solid #057; border-radius:5%;">For Loop in PHP !</h1></center>';
?>

<?php 
	$student = array('Masud','Saiful','Mehedi','MAHIN','SHOHAGI','ASA','Sornil','vuila gesi','mone porse','abdullah');
	
	foreach($student as $data)
	{
		echo $data; echo '&mdash;'; 
	}
?>	

<?php 
/*
	for($i=1; $i<=100; $i++){
		echo $i; echo '&mdash;'; 
	}
*/
?>