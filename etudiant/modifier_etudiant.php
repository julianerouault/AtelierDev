<?php
require_once '../lib/functions.php';
require_once '../model/database.php';

$user = currentUser();

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$num_telephone = $_POST["telephone"];
$email = $_POST["email"];
$niveau = $_POST["niveau"];

updateEtudiant($nom, $user["id"], $prenom, $num_telephone, $niveau);

header('Location: index.php');
