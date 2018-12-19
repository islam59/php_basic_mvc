<?php 
	include 'mvc-FRAMEWORK/Configuration/config.php';
	include 'mvc-FRAMEWORK/Library/Database.php';

	$db = new Database(); 
?>
<?php 
	$cv_qry = "SELECT * FROM tb_cv_info WHERE id=1";
	$result = $db->select($cv_qry); 
	if($result){
		$person = $result->fetch_assoc(); 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CV &mdash; <?php if(isset($person)){ echo $person['name']; } ?> </title>
	<style type="text/css">
		.mainpage{background: #edb4b4;width: 80%;margin: 0px auto; min-height: 1100px;}
		.header{background: teal;width: 100%; min-height: 60px;}
		.headleft{background: white;color:red;width: 78%;float: left;padding: 1%;}
		.headright{background: red;color:red;width: 18%;float: left;padding: 1%;}
		.headbottom{background: #eacece;width: 98%; min-height: 60px;padding:1%; }
		.content{background: #eacece;width: 100%; min-height: 1100px;}
		.leftcontent{background:  #ffe6e6; min-height: 1078px;width: 78%;float: left;padding: 1%;}
		.rightcontent{min-height: 450px;;width: 20%;float: left;}
		.image{text-align: right;}
		.summary{background: #d6d6c2; min-height: 10px;padding: 10px;clear:both;}
		.associations{background: #d6d6c2; min-height: 20px;padding: 10px;clear:both;}
	</style>
</head>
<body>
	<div class="mainpage">

		<div class="header">
			
			<div class="headleft">
				<h1><?php if(isset($person)){ echo $person['name']; } ?></h1>
			</div>
			<div class="headright">
				<h2>...</h2>
			</div>
		</div>


		<div class="content">

			<div class="leftcontent">

			<div style="">
				<h3>Objectives</h3><HR/>
				<p>
					<?php if(isset($person)){ echo $person['objectives']; } ?>
				</p>
			</div>

			<div style="">
				<h3>Summary</h3><HR/>
				<p>
					<?php if(isset($person)){ echo $person['summary']; } ?>
				</p>
			</div>
				 




			<div style="">
				<h3>Experiance</h3><HR/>
				<P>
					<?php if(isset($person)){ echo $person['experiance']; } ?>
				</P>
			</div>
			<div style="">
				<h3>EDUCATION</h3><HR/>
				<P>
					<?php if(isset($person)){ echo $person['education']; } ?>
				</P>
			</div>
			<div>
				<div style="width:40%; padding:5%; float:left; ">
					<h3>Ref 1</h3><HR/>
					<P>
						<?php if(isset($person)){ echo $person['ref1']; } ?>
					</P>
				</div>
				<div style="width:40%; padding:5%;float:left;  ">
					<h3>Ref 2</h3><HR/>
					<P>
						<?php if(isset($person)){ echo $person['ref2']; } ?>
					</P>
				</div>		
			</div>



			</div>
			

			<div class="rightcontent">
				<div class="image" >
					<img src="cute.jpg" style="width:100%; ">
				</div>
				<div style="padding:1%; text-align:center; ">
					<h2>
						<?php if(isset($person)){ echo $person['name']; } ?><br/>
						<small>( <?php if(isset($person)){ echo $person['designation']; } ?> )</small>					
					</h2>					
				</div>
				<div style="padding:1%; text-align:center; ">
					<p>Email: <?php if(isset($person)){ echo $person['email']; } ?></p>					
					<p>LinkedLn: <?php if(isset($person)){ echo $person['linkedln']; } ?></p>
					<p>Phone: <?php if(isset($person)){ echo $person['phone']; } ?></p>				
					<p><?php if(isset($person)){ echo $person['address']; } ?></p>					
				</div>								
			</div>
			
		</div>


		
	</div>
</body>
</html>