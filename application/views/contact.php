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
      <td><a href="logout" class="links">Deconnection</a></td>
      </tr>
    </table> 
  </nav></center>


  <center>
    <h1> Rapport de projet </h1>
    <br>
    <br>
    <us> Temps de travail pour la réalisation du projet :</u>
      <br><br>
      ~ 40 heures.
      <br>
      <br>
      <br>

      <br>
      <br>
      <br>

      <u> La répartition des tâches dans le groupe :  </u>
      <br><br>
      Pour la répartition des tâches Je me suis occupée du html/css en mettant avec Vincent nos idées en commun.<br>
      Puis je me suis occupée des sections Log, Accueil et Vincent des sections Artiste et Album. Mais nous avons<br>
      beaucoup travaillé en commun sur chaque section un de nous  a ajouté quelque chose.<br>
      <br>
      <br>
      <br>

      <br>
      <br>
      <br>

      <u> Une section précisant les particularités de votre application :  </u>
      <br>
      <br>
      <li>Dans la section <b>Log/Connection</b> on a mis en plus l'inscription et la connexion. Lorsqu'un utilisateur se connecte<br>
        il est dirigé sur le site de musique mais si il rentre un idientifiant déja utilisé il est averti et est redirigé<br>
        sur cette même page. Lorque l'utilisateur se connecte il est soit dirigé sur le site soit redirigé vers la même page de connection si son <br>
        identifiant n'existe pas.</li>
        <br>
        <br>
        <li>Dans la section <b>Home</b> on met à jour les nouveaux albums et artiste ajouté.</li>
        <br>
        <br>
        <li>Dans la section <b>Artistes</b> on a tout les artistes ajoutés à la base de données. Lorsque l'on clique sur la photo de l'artiste il nous dirige<br>
          vers la liste de tous les albums de l'artiste. Si on clique sur la photo de l'album il nous affiche une nouvelle page avec toutes<br>
          les informations de l'album. Dans cette section on peut aussi ajouter des artistes.</li>
          <br>
          <br>
          <li> Dans la section <b>Albums</b> on a tout les albums ajoutés la base de données. Lorsque l'on clique sur la pochette de l'album il nous affiche<br>
            toutes les informations de cet album et également la possibilté de commenter. Danse cette même page on peut aussi ajouter un album.</li>
            <br>
            <br>
            <li> Dans la section <b>Déconnexion</b>, l'utilisateur peut quitter le site et être redirigé sur la page d'inscription.</li>
            <br>
            <br>
            <br>
            
            <br>
            <br>
            <br>

            <u> Une section mettant en relation ce que vous avez développé et les notions vues dans certains cours :</u>
            <br>
            <br>
            Pour la section <b>Log/Connexion</b> et <b>Artistes/Albumqs</b> on a pu mettre en relation avec la même notion vue en cours de wim,<br>
            pour le php et html/css. De même pour la base de données et le sql qu'on a pu mettre en relation avec les cours de SGBD.
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <u>La phase d'analyse et conception : </u>
            <br>
            <br>
            <img src="<?php echo base_url('/assets/img/classdiagram.png'); ?>" alt="">

            <br>
            <br>
            <br>

          </center>
        </body>
        </html>
