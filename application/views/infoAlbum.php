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
      <td><h3>Bonjour <?php echo $this->session->userdata('login')?></h3></td>
      <td><a href="index_accueil" class="links">Home</a></td>
      <td><a href="index_artistes" class="links">Artistes</a></td>
      <td><a href="index_albums" class="links">Albums</a></td>
      <td><a href="index_contact" class="links">Contact</a></td>


    </tr>
  </table> 
</nav></center>


  <h2>Album's informations</h2>

  <table class="table">

<tr>
  
  
  <?php if (!empty($_GET)){ $id=$_GET['idAlbum'];} 
  else {
    $id=$data['id'];
  }
try
{
    $bdd = mysqli_connect('dwarves.iut-fbleau.fr','ramis','danse','ramis');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$stmtt = mysqli_prepare($bdd,"SELECT urlimg,titre,genre,anneeSortie,duree,pseudo FROM Album,Artiste WHERE Artiste.idArtiste=Album.idArtiste AND idAlbum=?");
if (!$stmtt) die ("pb");
mysqli_stmt_bind_param($stmtt,"i",$id);
mysqli_execute($stmtt);
$ress = mysqli_stmt_get_result($stmtt);
$flag=0;
while ($enr = mysqli_fetch_assoc($ress))
    {
    
    echo "<tr><th>Titre : </th><td>".$enr['titre']."</td></tr>";
    echo "<tr><th>Artiste :&nbsp;&nbsp; </th><td>".$enr['pseudo']."</td></tr>";
    echo "<tr><th>Genre :&nbsp;&nbsp; </th><td>".$enr['genre']."</td></tr>";
    echo "<tr><th>Sortie :&nbsp;&nbsp; </th><td>".$enr['anneeSortie']."</td></tr>";
    echo "<tr><th>Durée :&nbsp;&nbsp; <td>".$enr['duree']."&nbsp;min </td></tr>";
    echo "</table>";
    echo "<img class='imgAlbum' src='".$enr['urlimg']."'</img>";
  }



$stmt = mysqli_prepare($bdd,"SELECT * FROM Commentaire WHERE idAlbum=?");
if (!$stmt) die ("pb");
mysqli_stmt_bind_param($stmt,"i",$id);
mysqli_execute($stmt);
$res = mysqli_stmt_get_result($stmt);


foreach($res as $com){
  echo"<table>";
  echo "<tr><td>[".$com['date']."]";
  echo " ".$com['utilisateur'].": </td>";
  echo "<td><th>".$com['com']."</td></tr>";
  echo"</table>";
}
?>
<form method="post" action="post">
           
            <input type="hidden" name="idAlbum" value=<?php echo $id;?>/>
            <label for="com">Commentaire : </label><br /><textarea name="com" id="com" placeholder="Ecrivez votre commentaire ici..."></textarea><br />
            <input type="submit" value="Envoyer" />
             </form>







<?php

mysqli_close($bdd);

?>



</body>
</html>
