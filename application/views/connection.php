<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<html>
<head>
  <title>Music Collection</title>
	<?=link_tag("assets/css/costyle.css")?>
</head>


<body>
<!-- <?php echo base_url(); ?> -->

<div>
<center><nav>
<h1> Please login </h1>


  <p><b><i> <?php echo validation_errors(); ?> </i></b></p>

	<form action="<?php echo site_url(); ?>/Log/submit_connection" method="POST">

    <b>Login</b>
    <br>
    <input name="login" type="text"><br>
    <b>Password</b> 
    <br>
    <input type="password" name="password"><br>
    <br>
    <input name="submit" type="submit" value="Connection">
  	</form> 
      <a href="index" class="links">Sign up</a>

</nav></center>
</div>

</body>
</html>