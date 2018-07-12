<?php
require_once '../lib/functions.php';
require_once '../model/database.php';

$user = currentUser();

$nom = $_POST["nom"];
$nom = $_POST["email"];
$nom = $_POST["telephone"];

updateEntreprise($nom, $user["id"]);

header('Location: index.php');
