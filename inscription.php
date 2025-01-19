<?php
require_once 'templates/header.php';
require_once 'lib/pdo.php';
require_once 'lib/utilisateur.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $verif = verifyUSer($pdo, $_POST);

    if ($verif === true) {
        $resAdd = addUSer($pdo, $_POST["pseudo"], $_POST["email"], $_POST["mot_de_passe"]);
        header("Location: index.php");
    } else {
        $errors = $verif;
    }
}
?>



<div class="container">
    <h1>Inscription</h1>

    <form method="post">

        <!-- pseudo -->
        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?= isset($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']) : '' ?>">
            <?php if (isset($errors["pseudo"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors["pseudo"] ?>
                </div>
            <?php } ?>
        </div>

        <!-- email -->
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
            <?php if (isset($errors["email"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors["email"] ?>
                </div>
            <?php } ?>
        </div>

        <!-- mot de passe -->
        <div class="mb-3">
            <label for="mot_de_passe" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe">
            <?php if (isset($errors["mot_de_passe"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors["mot_de_passe"] ?>
                </div>
            <?php } ?>
        </div>

        <!-- confirmation mot de passe -->
        <div class="mb-3">
            <label for="confirm_mot_de_passe" class="form-label">Confirmer le mot de passe</label>
            <input type="password" class="form-control" id="confirm_mot_de_passe" name="confirm_mot_de_passe">
            <?php if (isset($errors["confirm_mot_de_passe"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors["confirm_mot_de_passe"] ?>
                </div>
            <?php } ?>
        </div>

        <!-- bouton -->
        <button type="submit" class="btn btn-primary w-100" name="add_user">S'inscrire</button>
    </form>
</div>


<?php
require_once 'templates/footer.php';
?>