<?php

function getTrajets(PDO $pdo)
{
    $sql = 'SELECT * FROM trajet';

    $query = $pdo->prepare($sql);

    $query->execute();
    return $query->fetchAll();
}
