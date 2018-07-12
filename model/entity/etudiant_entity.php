<?php

function getOneEtudiant(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
              utilisateur.*,
              etudiant.nom,
              etudiant.prenom,
              etudiant.date_naissance,
              etudiant.num_telephone
            FROM utilisateur
            INNER JOIN etudiant ON etudiant.id = utilisateur.id
            WHERE utilisateur.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function getAllEtudiant(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
              utilisateur.*,
              etudiant.nom,
              etudiant.prenom,
              etudiant.date_naissance,
              etudiant.num_telephone
            FROM utilisateur
            INNER JOIN etudiant ON etudiant.id = utilisateur.id
            WHERE utilisateur.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":date_de_naissance", $date_de_naissance);
    $stmt->bindParam(":numero_tel", $num_tel);
    $stmt->execute();

    return $stmt->fetchAll();
}

function updateEtudiant(string $nom, int $id, string $prenom, string $num_telephone, int $niveau) {
    /* @var $connection PDO */
    global $connection;

    $query = "UPDATE etudiant
              SET nom = :nom,
                  prenom = :prenom,
                  num_telephone = :num_telephone,
                  niveau_detude_id = :niveau
              WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":niveau", $niveau);
    $stmt->bindParam(":num_telephone", $num_telephone);
    $stmt->execute();
}
