<?php
require_once 'templates/header.php';

//Pour vérifier qu'un utilisateur est connecté avant d'afficher ses infos
if (!isset($_SESSION["utilisateur"])) {
    header("Location: connexion.php");
    exit;
}

?>



<div class="container">
    <h1>Hello <?= $_SESSION['utilisateur']['pseudo']; ?></h1>
    <p>Crédits : <?= $_SESSION["utilisateur"]["credits"]; ?></p>

</div>



<?php
require_once 'templates/footer.php';
?>