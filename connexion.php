<?php
session_start();


require_once 'templates/header.php';
require_once 'lib/pdo.php';
require_once 'lib/utilisateur.php';

$error = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $utilisateur = verifyUserLoginPassword($pdo, $_POST["email"], $_POST["mot_de_passe"]);
    if ($utilisateur) {
        session_regenerate_id(true);
        $_SESSION["utilisateur"] = [
            "id" => $utilisateur["id"],
            "pseudo" => $utilisateur["pseudo"],
            "credits" => $utilisateur["credits"]
        ];
        header("Location: index.php");
    } else {
        $error = "Email ou mot de passe invalide.";
    }
}


?>



<div class="container">
    <h1>Connexion</h1>

    <form method="post">

        <!-- email -->
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
        </div>

        <!-- mot de passe -->
        <div class="mb-3">
            <label for="mot_de_passe" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe">
        </div>

        <?php if ($error): ?>

            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>

        <?php endif; ?>



        <!-- bouton -->
        <input type="submit" value="Se connecter" class="btn btn-primary w-100" name="add_user">

        <div class="text-center my-3">
            <a href="/inscription.php">Pas encore de compte ? <strong>Inscris-toi !</strong></a>
        </div>
    </form>
</div>


<?php
require_once 'templates/footer.php';
?>