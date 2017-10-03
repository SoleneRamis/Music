<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<html>
<head>
  <title>Music Collection</title>
    <!--link rel="stylesheet" href="../assets/css/logstyle.css" type="text/css"/-->
	<?=link_tag("assets/css/logstyle.css")?>
</head>


<body>
<!-- <?php echo base_url(); ?> -->

<div>
<center>	
<h1> Please Sign Up </h1>

   <p><b><i> <?php echo validation_errors(); ?> </i></b></p>


	<form action="<?php echo site_url(); ?>/Log/submit_register" method="POST">

    <b>Login</b>
    <br>
    <input type ="text" name="login"><br>
    <b>Password</b> 
    <br>
    <input type="password" name="password"><br>
    <b>Confirm password</b> 
    <br>
    <input type="password" name="verifpass"><br><br>
    <input name="submit" type="submit" value="Sign up"><br>
   	</form> 
      <a href="<?php echo base_url();?>index.php/Log/connection" class="links">Sign in</a>

</center>
</div>

</body>
</html>
