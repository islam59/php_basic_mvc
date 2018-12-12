<?php 
	class student{
		
		public function __construct(){
			include 'header.php';
			include 'top_menu.php';
			
		} 
		
		public function __destruct(){
			include 'footer.php';
		} 
		
		public function home(){
			include 'home.php'; 
		}
		public function about(){
			include 'about.php'; 
		}
		public function contact(){
			include 'contact.php'; 
		}
		
		public function denied(){
			include 'error.php'; 
		}
		
	}
?>