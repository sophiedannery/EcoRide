<?php
session_start();

require_once 'lib/config.php';


$currentPage = basename($_SERVER['SCRIPT_NAME']);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide</title>

    <!-- appel de SASS -->
    <link rel="stylesheet" href="scss/main.css">

    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="/media/logos/EcoRide_Logo2.png" alt="Logo EcoRide" width="120">
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <?php foreach ($mainMenu as $key => $value) { ?>
                    <li class="nav-item">
                        <a href="<?= $key; ?>" class="nav-link <?php if ($currentPage === $key) {
                                                                    echo 'active';
                                                                } ?>"><?= $value; ?></a>
                    </li>
                <?php } ?>
            </ul>

            <div class="col-md-3 text-end">
                <?php if (isset($_SESSION['utilisateur'])): ?>
                    <a class="btn btn-outline-primary me-2" href="pageutilisateur.php">Mon compte</a>
                    <a class="btn btn-primary" href="deconnexion.php">Déconnexion</a>
                <?php else: ?>
                    <button type="button" class="btn btn-outline-primary me-2"><a href="/connexion.php">Connexion</a></button>
                    <button type="button" class="btn btn-primary"><a href="inscription.php">Inscription</a></button>
                <?php endif; ?>
            </div>
        </header>
    </div>

    <main>