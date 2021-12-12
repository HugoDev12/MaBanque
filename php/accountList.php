
<?php 
require("php/addAccount.php");
require("php/checkInputs.php");
echo addAccount();  

if ( isset($_POST['submit'])) {
    $accounts_file = "php/accounts.php";
    $lines = file($accounts_file);

    $name = $_POST['accountName'];
    $number = $_POST['accountNumber'];
    $owner = $_POST['Owner'];
    $amount = $_POST['Amount'];
    $lastOperation = $_POST['lastOperation'];

    $newAccount = checkInputs($name,$number,$owner,$amount,$lastOperation);

    $lines[3] = $newAccount.$lines[3];
    file_put_contents($accounts_file, implode('', $lines));
}

require("php/accounts.php");
$accounts = get_accounts();
foreach ($accounts as $key => $value) {
    $title = $value["name"];
    echo "<article class='border my-4 mx-2 col-8 col-md-4 col-lg-5 d-flex flex-column justify-content-center align-items-center'>
    <h2>$title</h2>
    <a class='btn btn-primary' href='details.php?id=$key'>Détails</a>
    </article>";
}

?>