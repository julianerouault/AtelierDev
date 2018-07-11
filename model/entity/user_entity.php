<?php

function existeEmail($email) {
    global $connection;

    $sql = "SELECT 1
            FROM utilisateur
            WHERE adressemail = :email";

    $stmt = $connection->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $row = $stmt->fetch();

    return !empty($row);
}

function getUtilisateurByEmailPassword(string $email, string $mot_de_passe) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
              utilisateur.*,
              admin.id AS admin,
              etudiant.id AS etudiant,
              entreprise.id AS entreprise
            FROM utilisateur
            LEFT JOIN admin ON admin.id = utilisateur.id
            LEFT JOIN etudiant ON etudiant.id = utilisateur.id
            LEFT JOIN entreprise ON entreprise.id = utilisateur.id
            WHERE adressemail = :email
            AND mot_de_passe = SHA1(:mot_de_passe);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":mot_de_passe", $mot_de_passe);
    $stmt->execute();

    return $stmt->fetch();
}

function getOneUtilisateur(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
              utilisateur.*,
              admin.id AS admin,
              etudiant.id AS etudiant,
              entreprise.id AS entreprise
            FROM utilisateur
            LEFT JOIN admin ON admin.id = utilisateur.id
            LEFT JOIN etudiant ON etudiant.id = utilisateur.id
            LEFT JOIN entreprise ON entreprise.id = utilisateur.id
            WHERE utilisateur.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertUser(string $email, string $password, string $role) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO utilisateur (adressemail, mot_de_passe, date_inscription) VALUES (:email, SHA1(:mot_de_passe), NOW())";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":mot_de_passe", $password);
    $stmt->execute();

    $id = $connection->lastInsertId();

    if ($role == "etudiant") {
        $query = "INSERT INTO etudiant (id) VALUES (:id)";
    } else if ($role == "professionnel") {
        $query = "INSERT INTO entreprise (id) VALUES (:id)";
    }

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}
