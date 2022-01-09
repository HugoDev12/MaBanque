<?php
require_once "model/db_requests.php";
$datas = getAccDetails($dbh, $_GET["id"]+1);
?>

<section class="container d-flex flex-column align-items-center justify-content-center" style="height: 60vh;">
    <h3 class="py-2" style="border-bottom: 1px solid red;">Détails de votre compte <?= $datas["account_name"] ?></h3><br><br>
    <ul style="list-style: none">
        <li class="my-3">Date de création : <?= $datas["account_creation"] ?></li>
        <li class="my-3">Montant : <?= $datas["account_amount"] ?>€</li>
        <li class="my-3">Numéro : <?= $datas["account_number"] ?></li>

        <!-- suite à faire après avoir fait et sécuriser l'ajout d'un compte. <li class="my-3">Derniere opération effectuée : <?= $datas["lastOp_description"] ?></li> -->


    </ul>
    <a href="index.php" class="btn btn-primary">Retour</a>
</section>










