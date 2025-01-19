<?php

// récupérer les informations de connexions sur .env
$config = parse_ini_file($_SERVER["DOCUMENT_ROOT"] . "/.env");

if ($config === false) {
    // si le fichier .env n'est pas bien chargé, on ne try pas
    die("Erreur lors du chargement du fichier .env");
}


try {
    // connexion à la bdd
    $pdo = new PDO("mysql:dbname={$config["db_name"]};host={$config["db_host"]};charset=utf8mb4", $config["db_user"], $config["db_password"]);

    // gestion des erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur : {$e->getMessage()}");
}
