<?php 
	
	Class Dashboard{
		public function __construct(){
			include 'header.php'; 
			include 'menu.php'; 	
		}
		public function __destruct(){
			include 'footer.php'; 	
		}
		
		public function landingpage(){
			include 'homepage.php'; 
		}
		public function aboutpage(){
			include 'about.php'; 
		}
		public function contactpage(){
			include 'contact.php'; 
		}
		
	}
?>