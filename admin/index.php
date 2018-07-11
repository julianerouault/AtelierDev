<?php
require_once '../lib/functions.php';
require_once '../model/database.php';

$utilisateur = currentUser();
if(!isset($utilisateur["admin"])) {
  header("Location: ../index.php");
}

$utilisateurs = getAllEntity("utilisateur");

getHeader("Accueil");
?>


<h1>Liste des utilisateurs</h1>

<table>
  <thead>
    <tr>
      <th>Email</th>
      <th>Date inscription</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($utilisateurs as $utilisateur) : ?>
      <tr>
        <td><?php echo $utilisateur["adressemail"] ?></td>
          <td><?php echo $utilisateur["date_inscription"] ?></td>
          <td>
            <a href="update_utilisateur.php?id=<?php echo $utilisateur["id"] ?>">
              <?php if ($utilisateur["valide"] == 1) : ?>
                Désactiver
              <?php else: ?>
                Activer
              <?php endif; ?>
            </a>
          </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<?php getFooter(); ?>
