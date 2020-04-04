

<?php

require 'database/db.php';


 ?>

<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
                   <!-- Boostrap -->
  <link rel="stylesheet" type="text/css" href="boostrap/boostrap.min.css">
  <link rel="stylesheet" type="text/css" href="boostrap/boostrap.css">
  <link rel="stylesheet" type="text/css" href="boostrap/boostrap-theme.css">
  <link rel="stylesheet" type="text/css" href="boostrap/boostrap-theme.min.css">
             <!--  JavaScript / Jquery -->
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
                    <!-- Css -->
  <link rel="stylesheet" type="text/css" href="css/resultat.css">

<title>resultat du vote</title>
</head>
<body>
<header>
  <nav>
    <ul>
      <li><a href="../index.php">Accueil</a></li>
    </ul>
  </nav>
</header>

<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=vote;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$donnees = array();
$reponse = $bdd->query(' SELECT specialite, AVG(note) FROM etudiant GROUP BY specialite;  ');

echo '<p>le resultat des votes  :</p>';
while ($donnees = $reponse->fetch())
{
  echo $donnees[0],$donnees[1]  . '<br />';
}

$reponse->closeCursor();

?>
</body>
</html>
