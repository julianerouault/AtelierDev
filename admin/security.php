<?php

session_start();

print_r($_POST);

require_once __DIR__ . "/../model/database.php";

// L'utilisateur essai de se connecter
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Recherche l'utilisateur en BDD
    $utilisateur = getUtilisateurByEmailPassword($email, $password);
    echo 'user : ';
    print_r($utilisateur);


    if (isset($utilisateur["id"])) {
        $_SESSION["id"] = $utilisateur["id"];
    }
} else {
    // Si l'utilisateur est déjà connecté
    if (isset($_SESSION["id"])) {
        $utilisateur = getOneUtilisateur($_SESSION["id"]);

    }
}

// Si l'utilisateur n'est pas connecté
if (!isset($utilisateur["id"])) {
?>  <p class="message error">Bonjour</p>  <?php
}
