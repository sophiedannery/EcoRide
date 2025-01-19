<?php
require_once 'templates/header.php';
?>



<div class="container">
    <h1>Hello <?= $_SESSION['utilisateur']['pseudo']; ?></h1>
    <p>Crédits : <?= $_SESSION["utilisateur"]["credits"]; ?></p>

</div>



<?php
require_once 'templates/footer.php';
?>