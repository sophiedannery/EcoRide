<?php
require_once 'templates/header.php';

//Pour vérifier qu'un utilisateur est connecté avant d'afficher ses infos
if (!isset($_SESSION["utilisateur"])) {
    header("Location: connexion.php");
    exit;
}

$isNewUser = isset($_SESSION["new_user"]) && $_SESSION["new_user"] === true;

unset($_SESSION["new_user"]);

?>

<!-- Modal -->
<div class="modal fade" id="modal_bienvenue" tabindex="-1" aria-labelledby="modal_bienvenueLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="modal_bienvenueLabel">Bienvenue sur EcoRide !</h5>
            </div>
            <div class="modal-body text-center">
                <img src="/media/images/Vecteur3.png" alt="Cadeau crédit offert" width="400">
                <p class="mb-0">
                    Félicitations ! Votre inscription a bien été prise en compte. Vous avez reçu <strong>20 crédits offerts</strong> pour commencer à utiliser EcoRide.
                </p>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">C'est parti !</button>
            </div>
        </div>
    </div>
</div>

<div class="container">


    <h1>Hello <?= $_SESSION['utilisateur']['pseudo']; ?></h1>
    <p>Crédits : <?= $_SESSION["utilisateur"]["credits"]; ?></p>

</div>

<script>
    <?php if ($isNewUser) { ?>

        var myModal = new bootstrap.Modal(document.getElementById('modal_bienvenue'), {
            keyboard: false
        });
        myModal.show();

    <?php } ?>
</script>



<?php
require_once 'templates/footer.php';
?>