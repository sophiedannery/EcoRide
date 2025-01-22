<?php
require_once 'templates/header.php';
require_once 'lib/pdo.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST["nom_contact"]));
    $prenom = htmlspecialchars(trim($_POST["prenom_contact"]));
    $email = filter_var($_POST["email_contact"], FILTER_SANITIZE_EMAIL);
    $sujet = htmlspecialchars(trim($_POST["sujet_contact"]));
    $message = htmlspecialchars(trim($_POST["message_contact"]));

    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($sujet) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $to = "dannery.sophie@gmail.com";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $body = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";

        if (mail($to, $sujet, $body, $headers)) {
            $success_message = "Votre message a bien été envoyé !";
        } else {
            $error_message = "Une erreur est survenue, veuillez réessayer. Détail : " . error_get_last()['message'];
        }
    } else {
        $error_message = "Veuillez remplir tous les champs du formulaire.";
    }
}

?>

<!-- TO DO : envoi email -->

<div class="container d-flex justify-content-center my-5">
    <div class="w-50">
        <h1 class="text-center mb-5">Nous contacter</h1>
        <form method="post">

            <!-- nom -->
            <div class="mb-3">
                <label for="nom_contact" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom_contact" name="nom_contact" value="<?= isset($_POST['nom_contact']) ? htmlspecialchars($_POST['nom_contact']) : '' ?>">
            </div>

            <!-- prenom -->
            <div class="mb-3">
                <label for="prenom_contact" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom_contact" name="prenom_contact" value="<?= isset($_POST['prenom_contact']) ? htmlspecialchars($_POST['prenom_contact']) : '' ?>">
            </div>

            <!-- email -->
            <div class="mb-3">
                <label for="email_contact" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email_contact" name="email_contact" value="<?= isset($_POST['email_contact']) ? htmlspecialchars($_POST['email_contact']) : '' ?>">
            </div>

            <!-- sujet -->
            <div class="mb-3">
                <label for="sujet_contact" class="form-label">Sujet</label>
                <input type="text" class="form-control" id="sujet_contact" name="sujet_contact" value="<?= isset($_POST['sujet_contact']) ? htmlspecialchars($_POST['sujet_contact']) : '' ?>">
            </div>

            <!-- message -->
            <div class="mb-3">
                <label for="message_contact" class="form-label">Votre message</label>
                <textarea type="text" rows="5" class="form-control" id="message_contact" name="message_contact"><?= isset($_POST['message_contact']) ? htmlspecialchars($_POST['message_contact']) : '' ?></textarea>
            </div>

            <!-- bouton -->
            <input type="submit" value="Envoyer" class="btn btn-primary w-100" name="add_user">
        </form>

        <?php if (isset($success_message)) : ?>
            <div class="alert alert-success my-5">
                <?= $success_message; ?>
            </div>
        <?php endif; ?>

        <?php if (isset($error_message)) : ?>
            <div class="alert alert-danger my-3">
                <?= $error_message; ?>
            </div>
        <?php endif; ?>
    </div>



</div>


<?php
require_once 'templates/footer.php';
?>