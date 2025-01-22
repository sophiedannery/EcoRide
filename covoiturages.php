<?php
require_once 'templates/header.php';
require_once 'lib/pdo.php';
require_once 'lib/config_trajet.php';


$trajets = getTrajets($pdo);


?>

<div class="container">
    <h1>Hello Covoiturages</h1>


    <div class="col-md-9">
        <div class="row">
            <?php
            foreach ($trajets as $key => $trajet) {
                require 'templates/trajet_part.php';
            }
            ?>
        </div>
    </div>

</div>



<?php
require_once 'templates/footer.php';
?>