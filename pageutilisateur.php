<?php
require_once 'templates/header.php';
require_once('lib/upload_photo_profil.php');
require_once('lib/modals.php');




//Pour vérifier qu'un utilisateur est connecté avant d'afficher ses infos
if (!isset($_SESSION["utilisateur"])) {
    header("Location: connexion.php");
    exit;
}

// Pour la modal de bienvenue
$isNewUser = isset($_SESSION["new_user"]) && $_SESSION["new_user"] === true;
unset($_SESSION["new_user"]);

?>





<div class="container">

    <h1>Hello <?= $_SESSION['utilisateur']['pseudo']; ?></h1>
    <p>Crédits : <?= $_SESSION["utilisateur"]["credits"]; ?> </p>


    <!-- Photo de profil -->
    <!-- TODO :: bug quand c'est pas un fichier jpg, la page reste blanche -->
    <div class="d-flex flex-column align-items-center">
        <div class="p-2">
            <img src="<?= isset($_SESSION['utilisateur']['photo']) ? $_SESSION['utilisateur']['photo'] : '/media/profil_defaut/photo_profil_defaut.jpg'; ?>" alt="photo de profil" class="rounded-circle border" style="object-fit: cover;" width="150" height="150">
        </div>
        <div class="p-2">
            <button class="btn btn-outline-primary me-2"><a href="#" data-bs-toggle="modal" data-bs-target="#uploadModal">Ajouter une photo de profil</a></button>
        </div>
        <!-- // message succès ou erreur -->
        <div class="p-2">
            <?php if (isset($_SESSION["upload_success"])) { ?>
                <div class="alert alert-success">
                    <?= $_SESSION["upload_success"]; ?>
                </div>
                <?php unset($_SESSION["upload_success"]); ?>
            <?php } ?>

            <?php if (isset($_SESSION["upload_error"])) { ?>
                <div class="alert alert-danger">
                    <?= $_SESSION["upload_error"]; ?>
                </div>
                <?php unset($_SESSION["upload_error"]); ?>
            <?php } ?>

        </div>
    </div>

</div>









<!-- Pour la modal de bienvenue -->
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