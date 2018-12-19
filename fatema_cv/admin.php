<?php 
  include 'mvc-FRAMEWORK/Configuration/config.php';
  include 'mvc-FRAMEWORK/Library/Database.php';

  $db = new Database(); 
?>

<?php /*Objective update module in php code..*/
  if(isset($_POST['objectives'])){

    $obj = $_POST['objectives']; 

    $obj_qry = "UPDATE tb_cv_info SET objectives='$obj' WHERE id=1";
    $result = $db->update($obj_qry); 

    if($result){
      header('Location:admin.php');
    }
  }
?>


<?php /*summary update module in php code..*/
  if(isset($_POST['summary'])){

    $samry = $_POST['summary']; 

    $obj_qry = "UPDATE tb_cv_info SET summary='$samry' WHERE id=1";
    $result = $db->update($obj_qry); 

    if($result){
      header('Location:admin.php');
    }
  }
?>

<?php 
  $cv_qry = "SELECT * FROM tb_cv_info WHERE id=1";
  $result = $db->select($cv_qry); 
  if($result){
    $person = $result->fetch_assoc(); 
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
    <h1>Hello, world!</h1><hr/>

    <br/>

<div class="col-md-6">
<h3 class="bg-danger">Summary Module</h3>
<form class="form-horizontal" action="admin.php" method="post">
  <div class="form-group">
    
    <div class="col-sm-12">
      <textarea class="form-control" rows="12" name="summary">
        <?php if(isset($person)){ echo $person['summary']; } ?>
      </textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-0 col-sm-12">
      <button type="submit" class="btn btn-warning">Update</button>
    </div>
  </div>
</form>
</div>

<div class="col-md-6">
<h3 class="bg-danger">Objectives Module</h3>
<form class="form-horizontal" action="admin.php" method="post">
  <div class="form-group">
    
    <div class="col-sm-12">
      <textarea class="form-control" rows="12" name="objectives">
        <?php if(isset($person)){ echo $person['objectives']; } ?>
      </textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-0 col-sm-12">
      <button type="submit" class="btn btn-warning">Update</button>
    </div>
  </div>
</form>
</div>


  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>