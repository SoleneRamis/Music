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

<body>
 <center><nav>
  <table>
    <tr>
      <td><a href="index_accueil" class="links">Home</a></td>
      <td><a href="index_artistes" class="links">Artistes</a></td>
      <td><a href="index_albums" class="links">Albums</a></td>
      <td><a href="index_contact" class="links">Contact</a></td>
    </tr>
  </table> 
</nav></center>
<center>

  <h1> Ajout d'un artiste </h1>
  <h2> Veuillez remplir tout les champs suivants </h2>

  <form action="<?php echo site_url(); ?>/accueil/AjoutArtiste" method="post">


     <input type="text" name="names" placeholder="Artiste" />
     <br><br>
    <input type="text" name="face" placeholder="Portrait*" />
   <br><br>
    <input type="submit" value="Valider" />
</form>

<p>
  * mettre le lien url pour portrait de l'artiste (taille 1600x1600 de préférence)
</p>
</center>



</body>
</html>