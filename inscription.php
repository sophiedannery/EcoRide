<?php
require_once 'templates/header.php';
require_once 'lib/pdo.php';
require_once 'lib/utilisateur.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $verif = verifyUSer($pdo, $_POST);
    if ($verif === true) {
        $resAdd = addUSer($pdo, $_POST["pseudo"], $_POST["email"], $_POST["mot_de_passe"]);
        $utilisateur = verifyUserLoginPassword($pdo, $_POST["email"], $_POST["mot_de_passe"]);
        if ($utilisateur) {
            session_regenerate_id(true);
            $_SESSION["utilisateur"] = [
                "id" => $utilisateur["id"],
                "pseudo" => $utilisateur["pseudo"],
                "credits" => $utilisateur["credits"],
            ];
            $_SESSION["new_user"] = true;
            header("Location: pageutilisateur.php");
            exit;
        }
    } else {
        $errors = $verif;
    }
}
?>



<div class="container d-flex justify-content-center my-5">
    <div class="w-50">

        <h1 class="text-center mb-5">Inscription</h1>

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
            <input type="submit" value="S'inscrire" class="btn btn-primary w-100" name="add_user">

            <div class="text-center my-3">
                <a href="/login.php">Déjà inscrit ? <strong>Connecte-toi !</strong></a>
            </div>
        </form>

    </div>

</div>


<?php
require_once 'templates/footer.php';
?>