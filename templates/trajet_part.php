<div class="col-md-4 my-2 d-flex">
    <div class="card w-100">

        <!-- TODO : rajouter mention écologique (lien avec véhicule) -->

        <img src="<?= !empty($trajet["photo"]) ? $trajet['photo'] : '/media/profil_defaut/photo_profil_defaut.jpg'; ?>" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px;" alt="photo de profil du chauffeur">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= $trajet["adresse_depart"] ?> - <?= $trajet["adresse_arrivee"] ?></h5>
            <p class="card-text">Départ : <?= $trajet["date_depart"] ?> à <?= $trajet["heure_depart"] ?></p>
            <p class="card-text">Arrivée prévue à <?= $trajet["heure_arrivee"] ?></p>
            <p class="card-text">Prix : <?= $trajet["prix"] ?> €</p>
            <p class="card-text">Place(s) disponible(s) : <?= $trajet["place_disponible"] ?></p>
            <p class="card-text">Chauffeur : <?= $trajet["pseudo"] ?> - <?= $trajet["note"] ?>/5</p>
            <div class="mt-auto">
                <a href="annonce.php?id=<?= $trajet["id"] ?>" class="btn btn-primary stretched-link w-100">Détails</a>
            </div>
        </div>
    </div>
</div>