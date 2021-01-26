<!DOCTYPE html>
<html>
<head>
<title>
  HOME
  </title>
  <style>
body {
  background: #ffffff url("img_tree.png") no-repeat right ;
  margin-right: 200px;
}
</style>
</head>
<body >
<div class="text" >
<?php session_start(); ?>
<?php echo('<h1>WELCOME TO OUR WEBSITE,  ' .htmlentities($_SESSION['username']).'</h1>');?>
</div>
<p>We Provide you the best!.</p>
<form method='POST' action='server.php'> 
 <input type='Submit' name= 'Logout' value='Logout'> 
 </form>    
</body>
</html>