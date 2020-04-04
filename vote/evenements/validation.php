
<?php

require 'database/db.php';
if(isset($_POST))
{
  $nom = verifyInput($_POST['nom']);
  $email = verifyInput($_POST['email']);
  $specialite = verifyInput($_POST['specialite']);
  $note = verifyInput($_POST['note']);

}
  $db = database::connect();

  $insert = $db-> prepare("INSERT INTO etudiant(`nom`, `email`, `specialite`, `note`) VALUES (?,?,?,?)");
  $insert ->execute(array($nom,$email,$specialite,$note));

  database::disconnect();

  header('location:remerciement.php');

  function verifyInput($magara)
  {
    $mag=trim($magara);
    $mag=stripcslashes($magara);
    $mag=htmlspecialchars($magara);

    return $mag;
  }

  ?>





