<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
 <!doctype html>
 <html lang='en'>
 <head>
  <meta charset="UTF-8">
  <title>Upload</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
  <style type="text/css">#D1, #D2, #D3, #D4 {display: none;}</style>
	<script type="text/javascript">
	function showRadio() {
		var n = document.form.btnr.length;
		for(i=1;i<=n;i++) {
			if(document.getElementById('choix'+i).checked == true) {
				document.getElementById('D'+i).style.display = "block";
			} else {
				document.getElementById('D'+i).style.display = "none";
			}
		}
	  }
	</script>
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
       <li><a href="<?php echo site_url();?>/artist/index"><span class="glyphicon glyphicon-user"></span> Artists</a></li>
 	   <li><a href="#"><span class="glyphicon glyphicon-queen"></span> Album chart </a></li>
       <li><a href="#"><span class="glyphicon glyphicon-globe"></span> News</a></li>
       <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	  <li class="active"><a href="<?php echo site_url();?>/user/upload"><span class="glyphicon glyphicon-upload"></span> Upload</a></li>
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
      <li class="active"><a href="<?php echo site_url();?>"><span class="glyphicon glyphicon-cd"></span> Home</a></li>
     <li><a href="<?php echo site_url();?>/artist/index"><span class="glyphicon glyphicon-user"></span> Artists</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url();?>/user/register"><span class="glyphicon glyphicon-info-sign"></span></span> Sign-up</a></li>
      <li><a href="<?php echo site_url();?>/user/login"><span class="glyphicon glyphicon-log-in"></span> Sign-in</a></li>
    </ul>
  </div>
</nav><?php }

if(!isset($_SESSION['loginlog']) && !isset($_SESSION['passelog'])){ ?>
	<div class="container">
      <div class="alert alert-danger">
        <strong>Oups!</strong> You must sign in to upload content!
	  </div>
	</div>
<?php 
}else{ ?>
	
<div class="inscr">
    <div class="container">
            <div class="row centered-form">
           	 <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<h3 class="panel-title">Upload content:</h3>
					</div>
					<div class="panel-body">
						<form name="form" action="<?php echo site_url('/user/submit_upload');?>" method="post">
						<?php echo validation_errors(); ?>
							<label>Album <input type="radio" id="choix1" name="btnr" value="Album" onclick="showRadio()" /></label> 
							<label>Artist <input type="radio" id="choix2" name="btnr" value="Artist" onclick="showRadio()" /></label> 
							<br /><br />
							<div id="D1">
								<div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
											<p>Title:</p>
											<input type="text" name="title" id="title" class="form-control input-sm" placeholder="Title" />
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
											<p>Genre:</p>
											<select name="genre" id="genre" size="1" class="form-control input-sm">
												<?php foreach ($nomGenre as $row){
													echo '<option>'.$row->nomGenre.'</option>';
												}?>
											</select>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
											<p>Released:</p>
											<input type="date" name="release" id="release"  class="form-control input-sm" placeholder="Released" />
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
											<p>Artists:</p>
												<div class="artists_list">
												<?php foreach ($nomScene as $row){ ?>
													<INPUT type="checkbox" name="artist[]" value="<?php echo $row->nomScene;?>"><?php echo $row->nomScene;?>
												<?php }?>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
											<p>Description:</P>
											<input type="text" name="descrip" id="descrip"  class="form-control input-sm" placeholder="Description" />
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
											<p>Image link:</p>
											<input type="text" name="image" id="image"  class="form-control input-sm" placeholder="Image link" />
									</div>
								</div>
							</div>
						</div>
						<div id="D2">
							<label>Name: <input type="text" /></label>
							<label>Occupation: <input type="text" /></label>
							<label>Born:  <input type="text" /></label>
							<label>Album(s):  <input type="text" /></label>
							<label>Biography:  <input type="text" /></label>
							<label>Image link:  <input type="text" /></label>
						</div>
						<input type="submit" value="Upload" class="btn btn-info btn-block">
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
} 
?>
</body>
</html>