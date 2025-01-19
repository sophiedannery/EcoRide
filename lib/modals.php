<!-- Modal de bienvenue -->
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




<!-- Modal ajout photo -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Ajouter une photo de profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="pageutilisateur.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="photo" class="form-label">Choisir une photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Télécharger</button>
                </form>
            </div>
        </div>
    </div>
</div>