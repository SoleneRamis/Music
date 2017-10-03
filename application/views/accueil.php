<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Music Collection</title>
  <meta charset="utf-8">
  
  <?=link_tag("assets/css/style.css")?>

</head>


<header>
  <img src="<?php echo base_url('/assets/img/ban.jpg'); ?>" alt="">
</header>

<body><nav>

<center>


  <table>
    <tr>
      <td><h3>Bonjour <?php echo $this->session->userdata('login')?></h3></td>
      <td><a href="index_accueil" class="links">Home</a></td>
      <td><a href="index_artistes" class="links">Artistes</a></td>
      <td><a href="index_albums" class="links">Albums</a></td>
      <td><a href="index_contact" class="links">Contact</a></td>
      <td><a href="logout" class="links">Deconnection</a></td>
    </tr>
  </table>     
</nav></center>

<h1>Derniers Albums ajoutés : <h1>

  <?php 

    

    foreach ($data as $row){ 


             echo " <a href='info_albums?idAlbum?=".$row->idAlbum."' >
           
                <img class='album' src='"; echo $row->urlimg; echo "' style='width:15%; height: 15%;' /> 
            
              </a>";

      };   ?>
  <h1>Derniers Atristes ajoutés : <h1>
<?php 

    

    foreach ($data2 as $row){ 

    

             echo " <a href='list_albums?idArtiste=".$row->idArtiste."' >
           
                <img class='artiste' src='"; echo $row->portrait; echo "' style='width:15%; height: 15%;' /> 
            
              </a>";

      }; 
?>


</body>
</html>
