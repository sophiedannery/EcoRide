<?php
require_once 'templates/header.php';
?>

<div class="container">
    <h1>Inscription</h1>

    <form method="post">
        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" class="form-control" id="pseudo">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="motDePasse" class="form-label">Mot de passe</label>
            <input type="motDePasse" class="form-control" id="motDePasse">
        </div>
        <div class="mb-3">
            <label for="confirmeMotDePasse" class="form-label">Confirmer le mot de passe</label>
            <input type="confirmeMotDePasse" class="form-control" id="confirmeMotDePasse">
        </div>

        <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
    </form>
</div>


<?php
require_once 'templates/footer.php';
?>