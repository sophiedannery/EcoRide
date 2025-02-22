<?php
require_once 'templates/header.php';
?>

<!--Formulaire de recherche-->
<div class="bgimage">
    <div class="container col-xl-10 col-xxl-8 px-4 py-5 ">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start ">
                <h1 class="display-4 fw-bold lh-1 text-white mb-3 ">Voyagez malin,<br>Voyages vert.</h1>
            </div>
            <div class="col-md-10 mx-auto col-lg-4">
                <form class="p-4 p-md-4 border rounded-3 bg-body-tertiary">
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" id="depart" placeholder="">
                        <label for="depart">Départ</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="arrivee" placeholder="">
                        <label for="arrivee">Arrivée</label>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <div class="form-floating position-relative">
                                <input type="date" class="form-control ps-5" id="aller" placeholder="">
                                <label for="aller">Aller</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating position-relative">
                                <input type="date" class="form-control ps-5" id="retour" placeholder="">
                                <label for="retour">Retour</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="passagers" placeholder="">
                        <label for="passagers">Nombre de passagers</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="ecologique"> Ecologique
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Rechercher</button>
                    <hr class="my-4">
                </form>
            </div>
        </div>
    </div>
</div>

<!--Paragraphe 1-->
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="/media/images/Vecteur.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">EcoRide</h1>
            <p class="lead">
                Bienvenue sur la plateforme de covoiturage dédiée à la mobilité écologique et durable.
                <br>Entrez en relation avec des conducteurs et des passagers pour des trajets partagés en voiture.
                <br>Notre mission : réduire l'impact environnemental des déplacements tout en offrant une alternative conviviale et économique à la mobilité individuelle.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2"><a href="/inscription.php">Je découvre</a></button>
            </div>
        </div>
    </div>
</div>

<!--Paragraphe 2-->
<div class="container px-4 py-3" id="custom-cards">
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg cardtest1">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Une mobilité plus verte</h3>
                    <p>EcoRide réduit votre empreinte carbonne en facilitant les trajets partagés en voiture électrique. Chaque voyage contribue à préserver l'environnement et à promouvoir une mobilité plus verte.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg cardtest2">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Une communauté engagée</h3>
                    <p>Trouvez des centaines de covoiturages grâce une communauté engagée où conducteurs et passagers partagent bien plus qu'un trajet.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg cardtest3">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Accessible et économique</h3>
                    <p>Voyager avec EcoRide, c'est faire des économies tout en roulant responsable. Réduisez vos frais de déplacement en partageant les coûts.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Paragraphe 3 -->
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">L'électrique en avant</h1>
            <p class="lead">Chez <strong>EcoRide</strong>, vous pouvez facilement sélectionner des trajets en voiture électrique grâce à notre filtre de recherche. <br>En quelques clics, affichez uniquement les trajets réalisés avec des véhicules électriques, pour voyager de manière plus écologique et économique. Ce filtre vous permet de réduire votre empreinte carbone tout en profitant d'un service de covoiturage pratique et responsable.</p>
        </div>
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="/media/images/image (19).jpg" class="d-block mx-lg-auto img-fluid rounded" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
    </div>
</div>


<!--Paragraphe 5-->
<div class="container my-5">
    <div class="p-5 text-center bg-body-secondary rounded-3">
        <img src="/media/images/vecteur3.png" alt="Logo EcoRide" width="300">
        <h1 class="text-body-emphasis my-3">20 crédits offerts</h1>
        <p class="col-lg-8 mx-auto fs-5 text-muted">
            Inscrivez-vous et démarrez votre voyage écologique avec un bonus !
        </p>
        <p>
            Pour chaque nouvelle inscription, nous offrons <strong>20 crédits</strong> à utiliser pour vos trajets.<br>
            C'est notre façon de vous dire <strong>merci</strong> de faire le choix d'une mobilité plus écologique et responsable
        </p>
        <div class="d-inline-flex gap-2 mb-5">
            <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 " type="button">
                <a href="/inscription.php">Je m'inscris</a>
            </button>
        </div>
    </div>
</div>



<?php
require_once 'templates/footer.php';
?>