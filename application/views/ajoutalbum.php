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
  <h1> Ajout d'un album </h1>
  <h2> Veuillez remplir tout les champs suivants </h2>

  <form action="<?php echo site_url(); ?>/accueil/AjoutAlbum" method="post">
     <input type="text" name="title" placeholder="Titre"/>
     <br><br>
     <select name="pseudo" id="pseudo">
      <br><br>
       <?php

       try
       {
        $bdd = mysqli_connect('dwarves.iut-fbleau.fr','ramis','danse','ramis');
      }
      catch (Exception $e)
      {
        die('Erreur : ' . $e->getMessage());
      }
      $stmtt = mysqli_prepare($bdd,"SELECT pseudo FROM Artiste");
      if (!$stmtt) die ("pb");

      mysqli_execute($stmtt);
      $ress = mysqli_stmt_get_result($stmtt);
      $flag=0;

      while ($enr = mysqli_fetch_assoc($ress))
      {


        echo '<option value="'.$enr['pseudo'].'">'.$enr['pseudo'].'</option>';


      }

      mysqli_close($bdd);

      ?>
    </select>
    <br><br>
    <select name="genre" id="genre">
     <?php

     try
     {
      $bdd = mysqli_connect('dwarves.iut-fbleau.fr','ramis','danse','ramis');
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
    $stmtt = mysqli_prepare($bdd,"SELECT code FROM Genre");
    if (!$stmtt) die ("pb");

    mysqli_execute($stmtt);
    $ress = mysqli_stmt_get_result($stmtt);
    $flag=0;
    while ($enr = mysqli_fetch_assoc($ress))
    {


      echo '<option value="'.$enr['code'].'">'.$enr['code'].'</option>';


    }

    mysqli_close($bdd);

    ?>
  </select>
  <br><br>
  <input type="text" name="sortie" placeholder="Date de sortie ex: AAAA-MM-JJ"/>
  <br><br>
  <input type="text" name="time" placeholder="Durée ex: '150' min" />
  <br><br>
  <input type="text" name="url" placeholder="Pochette*"/>
  <br><br>
  <input type="submit" value="Valider" />
</form>
<p>
  * mettre le lien url pour la pochette de l'album (taille 500x500)
</p>
</center>

</body>
</html>