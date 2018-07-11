<?php
require_once '../lib/functions.php';
require_once '../model/database.php';

$utilisateur = currentUser();
if(!isset($utilisateur["admin"])) {
  header("Location: ../index.php");
  die;
}

$id = $_GET["id"];
$utilisateur = getOneUtilisateur($id);

updateUtilisateur(!$utilisateur["valide"], $id);

header('Location: index.php');
