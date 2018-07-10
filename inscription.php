<?php

require_once 'model/database.php';

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

if(existeEmail($email)) {
  header('Location: index.php?inscription_error=emailexist');
  die;
}

insertUser($email, $password, $role);

header('Location: compte_cree.php');
