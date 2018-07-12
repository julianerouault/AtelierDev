<?php

function getOneEntreprise(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
              utilisateur.*,
              entreprise.nom
            FROM utilisateur
            INNER JOIN entreprise ON entreprise.id = utilisateur.id
            WHERE utilisateur.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function updateEntreprise(string $nom, int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "UPDATE entreprise
              SET nom = :nom
              
              WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}
