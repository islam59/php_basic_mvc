<?php 
	class student{
		
		
		function __destruct(){
			echo '<br/>Bye Bye!';	
		}
		
		function message(){
			echo '<br>you are in the message function<br/>';
		}
		
		function __construct(){
			echo 'hi how are you!';
		}
	
		
	}
?>