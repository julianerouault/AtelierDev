<?php
require_once '../lib/functions.php';
require_once '../model/database.php';

$utilisateur = currentUser();
if(!isset($utilisateur["etudiant"])) {
  header("Location: ../index.php");
}

getHeader("Accueil");
?>



<?php getFooter(); ?>
