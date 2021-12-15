
<?php 
require("php/addAccount.php");
require("php/config_db.php");
// require("php/checkInputs.php");
// echo addAccount();  

if ( isset($_POST['submitAccount']) && isset($_SESSION['user'])) {
    echo addAccount();
    $acccountName = htmlspecialchars($_POST['accountName']);
    $acccountNumber = htmlspecialchars($_POST['accountNumber']);
    $owner = htmlspecialchars($_POST['Owner']);
    $amount = htmlspecialchars($_POST['Amount']);
    $lastOperation = htmlspecialchars($_POST['lastOperation']);

    $sqlQuery = "INSERT INTO accounts VALUES (:accountName, :accountNumber, :amount)";
    $state = $dbh->prepare($sqlQuery);
    $state->execute([
        'account_name' => $accountName,
        'account_number' => $acccountNumber,
        'account_amount' => $amount
    ]);



    // $accounts_file = "php/accounts.php";
    // $lines = file($accounts_file);

    // $name = $_POST['accountName'];
    // $number = $_POST['accountNumber'];
    // $owner = $_POST['Owner'];
    // $amount = $_POST['Amount'];
    // $lastOperation = $_POST['lastOperation'];

    // $newAccount = checkInputs($name,$number,$owner,$amount,$lastOperation);

    // $lines[3] = $newAccount.$lines[3];
    // file_put_contents($accounts_file, implode('', $lines));
} else {
    echo addAccount();
    $sqlQuery = "SELECT * FROM accounts";
    $accounts = $dbh->prepare($sqlQuery);
    $accounts->execute();
    $datas = $accounts->fetchAll();
}

// require("php/accounts.php");
// foreach ($accounts as $key => $value) {
//     $title = $value["name"];
//     echo "<article class='border my-4 mx-2 col-8 col-md-4 col-lg-5 d-flex flex-column justify-content-center align-items-center'>
//     <h2>$title</h2>
//     <a class='btn btn-primary' href='details.php?id=$key'>Détails</a>
//     </article>";
// }
foreach ($datas as $key => $value) {
    $title = $value["account_name"];
    echo "<article class='border my-4 mx-2 col-8 col-md-4 col-lg-5 d-flex flex-column justify-content-center align-items-center'>
    <h2>$title</h2>
    <a class='btn btn-primary' href='details.php?id=$key'>Détails</a>
    </article>";
}

?>