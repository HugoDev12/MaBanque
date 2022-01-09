<?php
include_once "template/header.php";
include_once "template/nav.php";
require_once "model/db_requests.php";
require_once "model/addAccountModel.php";
//à modifier surement pour éviter les doublons au raffraichissement $newAccount = newAccount($dbh , $_SESSION["newAccount"], $_SESSION["userId"]);
// $newAccount = newAccount($dbh, $_SESSION["newAccount"], $_SESSION["userId"]);
if (isset($datas)){
    // $newAccount = newAccount($dbh, $datas, $_SESSION["userId"]);
    $datas = null;
}
$userAccounts = getUserAcc($dbh, $_SESSION["userId"]);
// var_dump($userAccounts);
// var_dump($_SESSION["newAccount"]);

echo "<h1>Bonjour " . $_SESSION["user"] . "</h1>";

echo addAccount();

if (isset($error)){
    echo $error;
}

if (isset($userAccounts)){
    foreach($userAccounts as $id => $account){
        $_GET["id"] = $id;

        echo "<article class='border my-4 mx-2 col-8 col-md-4 col-lg-5 d-flex flex-column justify-content-center align-items-center'>
        <h2>". $account['account_name'] . "</h2>
        <a class='btn btn-primary' href='details.php?id=". htmlspecialchars($_GET["id"]) ."'>Détails</a>
        </article>";
    }
}

include_once "template/footer.php";

?>




