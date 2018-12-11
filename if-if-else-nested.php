<?php 
	echo '<center><h1 style="border-top:2px solid #057; border-bottom:2px solid #057; border-radius:5%;">
		IF-ELSE IN PHP
	</h1></center>';
?>

<?php 
	$number1 = 14500; 
	$number2 = 20000; 
	$number3 = 2000; 
	
	if($number1>$number2){
		if($number1>$number3)
		{
			echo 'Number 1 is greater = '.$number1;
		}
		else
		{
			echo 'Number 3 is greater = '.$number3;
		} 
	}
	else
	{
		if($number2>$number3)
		{
			echo 'Number 2 is greater = '.$number2;
		}
		else
		{
			echo 'Number 3 is greater = '.$number3;
		}
	}
?>

<?php /*
	$number1 = 500; 
	$number2 = 200; 
	
	if($number1>$number2){
		echo 'Number 1 is greater = '.$number1; 
	}
	*/
?>

