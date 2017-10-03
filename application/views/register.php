<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!doctype html>
<html lang='en'>
<head>
  <meta charset="UTF-8">
  <title>Register</title>
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
      <li  class="active"><a href="<?php echo site_url();?>/user/register"><span class="glyphicon glyphicon-info-sign"></span> Sign-up</a></li>
      <li><a href="<?php echo site_url();?>/user/login"><span class="glyphicon glyphicon-log-in"></span> Sign-in</a></li>
    </ul>
  </div>
</nav>
<div class="inscr">
    <div class="container">
            <div class="row centered-form">
           	 <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                	<div class="panel panel-default">
                    		<div class="panel-heading">
                           		 <h3 class="panel-title">Please sign up to AlbumCloud <small>It's free!</small></h3>
                            	</div>
                            <div class="panel-body">
                              <?php echo validation_errors(); ?>
                              <?php echo form_open(site_url('/user/submit_register'));?>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                           <input type="text" name="nom" id="first_name" class="form-control input-sm" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="prenom" id="last_name" class="form-control input-sm" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                   <div class="form-group">
                                      <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
                                    </div>
                                  </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                    <input type="text" name="login" id="login" class="form-control input-sm" placeholder="Login">
                                  </div>
                                </div>
                              </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="passe" id="password" class="form-control input-sm" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="passe2" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Register" class="btn btn-info btn-block">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>