
<?php 
require("php/config_db.php");
// require("php/checkInputs.php");
// $userEmail = htmlspecialchars($_POST['userEmail']);
?>


<?php
// if ( isset($_POST['submitAccount']) ) {
//     $acccountName = htmlspecialchars($_POST['accountName']);
//     $acccountNumber = htmlspecialchars($_POST['accountNumber']);
//     $owner = htmlspecialchars($_POST['Owner']);
//     $amount = htmlspecialchars($_POST['Amount']);

//     $id = $dbh->prepare('SELECT id FROM user WHERE user_mail = "$userEmail"');
//     $userId = $id->execute();



//     $req = $dbh->prepare('INSERT INTO accounts (
//         account_name,
//         account_amount,
//         account_user_id) 
//         VALUES (?,?,?)');
//     $req->execute([$accountName, $amount, $userId]);
// } 




// $select = $dbh->prepare('SELECT u.user_mail, acc.* FROM user AS u INNER JOIN accounts AS acc WHERE u.user_mail = "$userEmail"');
// $select->execute();
// $accounts = $select->fetchAll();

// echo "<div class='row d-flex justify-content-center'>";
// echo addAccount();
// foreach ($accounts as $key => $value) {
//     $title = $value["account_name"];
//     echo "<article class='border my-4 mx-2 col-8 col-md-4 col-lg-5 d-flex flex-column justify-content-center align-items-center'>
//     <h2>$title</h2>
//     <a class='btn btn-primary' href='details.php?id=$key'>Détails</a>
//     </article>";
// }
// echo "</div>";

// $id = null;
// $select = null;
// $dbh = null;


function accountList(){
    $userEmail = htmlspecialchars($_POST['userEmail']);
    if ( isset($_POST['submitAccount']) ) {
        $acccountName = htmlspecialchars($_POST['accountName']);
        $acccountNumber = htmlspecialchars($_POST['accountNumber']);
        $owner = htmlspecialchars($_POST['Owner']);
        $amount = htmlspecialchars($_POST['Amount']);
    
        $id = $dbh->prepare('SELECT id FROM user WHERE user_mail = "$userEmail"');
        $userId = $id->execute();
    
    
    
        $req = $dbh->prepare('INSERT INTO accounts (
            account_name,
            account_amount,
            account_user_id) 
            VALUES (?,?,?)');
        $req->execute([$accountName, $amount, $userId]);


        $select = $dbh->prepare('SELECT u.user_mail, acc.* FROM user AS u INNER JOIN accounts AS acc WHERE u.user_mail = "$userEmail"');
        $select->execute();
        $accounts = $select->fetchAll();
        foreach ($accounts as $key => $value) {
            $title = $value["account_name"];
            return "<article class='border my-4 mx-2 col-8 col-md-4 col-lg-5 d-flex flex-column justify-content-center align-items-center'>
            <h2>$title</h2>
            <a class='btn btn-primary' href='details.php?id=$key'>Détails</a>
            </article>";
        }
    }
}
?>







<?php
// echo addAccount();
// $sqlQuery = "SELECT * FROM accounts";
// $accounts = $dbh->prepare($sqlQuery);
// $accounts->execute();
// $datas = $accounts->fetchAll();

// foreach ($datas as $key => $value) {
//     $title = $value["account_name"];
//     echo "<article class='border my-4 mx-2 col-8 col-md-4 col-lg-5 d-flex flex-column justify-content-center align-items-center'>
//     <h2>$title</h2>
//     <a class='btn btn-primary' href='details.php?id=$key'>Détails</a>
//     </article>";
// }


// require("php/accounts.php");
// foreach ($accounts as $key => $value) {
//     $title = $value["name"];
    // echo "<article class='border my-4 mx-2 col-8 col-md-4 col-lg-5 d-flex flex-column justify-content-center align-items-center'>
    // <h2>$title</h2>
    // <a class='btn btn-primary' href='details.php?id=$key'>Détails</a>
    // </article>";
// }


?>