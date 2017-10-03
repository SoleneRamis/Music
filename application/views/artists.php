<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
 <!doctype html>
 <html lang='en'>
 <head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
 </head>

 <body>
  <?php if(isset($_SESSION['loginlog']) && isset($_SESSION['passelog'])){?>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AlbumCloud</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo site_url();?>"><span class="glyphicon glyphicon-cd"></span> Home</a></li>
       <li class="active"><a href="<?php echo site_url();?>/artist/index"><span class="glyphicon glyphicon-user"></span> Artists</a></li>
 	   <li><a href="#"><span class="glyphicon glyphicon-queen"></span> Album chart </a></li>
      <li><a href="#"><span class="glyphicon glyphicon-globe"></span> News</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	  <li><a href="<?php echo site_url();?>/user/upload"><span class="glyphicon glyphicon-upload"></span> Upload</a></li>
      <li><a href="<?php echo site_url();?>"><span class="glyphicon glyphicon-info-sign"></span> <?php echo $_SESSION['loginlog'];?></a></li>
      <li><a href="<?php echo site_url();?>/user/logout"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
  </div>
</nav><?php }else{?>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AlbumCloud</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo site_url();?>"><span class="glyphicon glyphicon-cd"></span> Home</a></li>
      <li class="active"><a href="<?php echo site_url();?>/artist/index"><span class="glyphicon glyphicon-user"></span> Artists</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url();?>/user/register"><span class="glyphicon glyphicon-info-sign"></span> Sign-up</a></li>
      <li><a href="<?php echo site_url();?>/user/login"><span class="glyphicon glyphicon-log-in"></span> Sign-in</a></li>
    </ul>
  </div>
</nav><?php }?>

<div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Last Uploads</h1>
            </div>
		<?php foreach ($artists as $row){ ?>
	    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                	
			<?php echo '<a class="thumbnail" href="'.site_url().'/artist/details?artist='.$row->idArtiste.'">';?>
	    	   
     		       <img class="img-responsive" src="<?php echo $row->Photo;?>" alt=""/> 
            
                </a>
            </div>
<?php

		       }; ?>
        </div>  
<div class="pagination"><?php echo $links;?></div>


</body>

</html>