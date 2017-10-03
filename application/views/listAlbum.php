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


  <h2>Albums list</h2>



   
 
  
  <?php $id=$_GET['idArtiste'];
try
{
    $bdd = mysqli_connect('dwarves.iut-fbleau.fr','ramis','danse','ramis');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$stmtt = mysqli_prepare($bdd,"SELECT * FROM Album natural join Artiste WHERE idArtiste=?");
if (!$stmtt) die ("pb");
mysqli_stmt_bind_param($stmtt,"i",$id);
mysqli_execute($stmtt);
$ress = mysqli_stmt_get_result($stmtt);
$flag=0;

while ($enr = mysqli_fetch_assoc($ress))
    {

    echo "</br>";
    echo "<a href='info_albums?idAlbum=".$enr['idAlbum']."' ><img class='imgAlbum' src='".$enr['urlimg']."'</img></a>";
    echo "</br>";

}

mysqli_close($bdd);

?>



</body>
</html>