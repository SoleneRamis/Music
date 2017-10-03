<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!-- saved from url=(0054)http://dwarves.iut-fbleau.fr/~kara-mos/ALBUM/login.php -->
<html> 
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
 </head>

 <body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AlbumCloud</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo site_url();?>"><span class="glyphicon glyphicon-cd"></span> Home</a></li>
      <li><a href="<?php echo site_url();?>/artist/index"><span class="glyphicon glyphicon-user"></span> Artists</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url();?>/user/register"><span class="glyphicon glyphicon-info-sign"></span> Sign-up</a></li>
      <li  class="active"><a href="<?php echo site_url();?>/user/login"><span class="glyphicon glyphicon-log-in"></span> Sign-in</a></li>
    </ul>
  </div>
</nav>

<div class="inscr">
    <div class="container">
            <div class="row centered-form">
           	 <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                	<div class="panel panel-default">
                    		<div class="panel-heading">
                           		<h3 class="panel-title">Welcome in AlbumCloud<br /> <small>If you don't have an account, create one now it's easy and free!</small></h3>
				</div>
                        	<div class="panel-body">
				<?php echo validation_errors(); ?>
                              	<?php echo form_open(site_url('/user/submit_login'));?>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
              					<input type="text" id="loginlog" name="loginlog" class="form-control input-sm chat-input" placeholder="Login">
              				</div>
				    </div>
				    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
						<input type="password" id="passelog" name="passelog" class="form-control input-sm chat-input" placeholder="Password">
              				</div>
				    </div>
				</div>     
                  		<input type="submit" value="Sign in" class="btn btn-info btn-block">
				</form>
  			</div>
          	 </div>   
	   </div>
    </div>
</div>


</body>
</html>