<?php
require_once "db_connect.php";

function addAccount(){
    return "<article class='border my-4 mx-2 col-8 col-md-4 col-lg-5 d-flex flex-column justify-content-center align-items-center'>
    <h2>Ajouter un compte</h2>
    <button class='btn btn-primary' id='Open'>Ajouter</button>
    </article>";
}

function toLog(PDO $dbh, String $mail, String $pwd): array|bool{
    $state = $dbh->prepare("SELECT * FROM user WHERE mail = :mail AND pwd = :pwd");

    $state->execute([
    "mail" => $mail,
    "pwd" => $pwd,
]);
    return $state->fetch(PDO::FETCH_ASSOC);

}



function getUserAcc(PDO $dbh, String $userId): ?Array {
    $state = $dbh->prepare("SELECT u.id, acc.* FROM user AS u INNER JOIN accounts AS acc WHERE acc.account_user_id = :id GROUP BY acc.id");

    $state->execute([
        "id" => $userId
    ]);

    return $state->fetchAll(PDO::FETCH_ASSOC);
}



function getAccDetails(PDO $dbh, String $accountId): ?Array {
    // $state = $dbh->prepare(
    // "SELECT acc.*, ad.* FROM accounts AS acc
    // INNER JOIN account_details AS ad
    // WHERE acc.id = :id AND ad.id = :id
    // GROUP BY acc.account_name
    // ");

    $state = $dbh->prepare(
        "SELECT * FROM accounts WHERE id = :id"
    );

    $state->execute([
        "id" => $accountId
    ]);

    return $state->fetch(PDO::FETCH_ASSOC);
}

function newAccount(PDO $dbh, Array $datas, String $userId): void {
    $state = $dbh->prepare('INSERT INTO accounts (
        account_name,
        account_creation,
        account_amount,
        account_number,
        account_user_id) 
        VALUES (?,?,?,?,?)');
    $state->execute([$datas[0], $datas[3], $datas[2], $datas[1], $userId]);
}

// SELECT acc.id, ad.* FROM accounts AS acc INNER JOIN account_details AS ad WHERE acc.id = 1 AND ad.account_id = 1;

// $accId

// function setTransaction():

// $sqlQueryLogin = "SELECT * FROM user";
// $datas = $dbh->prepare($sqlQueryLogin);
// $datas->execute();
// $users = $datas->fetchAll();

// if (isset($_POST['submitLogin'])) {
//   $userEmail = htmlspecialchars($_POST['userEmail']);
//   $userPw = htmlspecialchars($_POST['userPw']);
//     foreach ($users as $user) {
//         if (
//             $user['user_mail'] === $userEmail &&
//             $user['user_pw'] === $userPw
//         ) {
//             $loggedUser = [
//                 'user_mail' => $user['user_mail'],
//             ];
//             $_SESSION['user'] = $userEmail;
//         } else {
//             $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
//                 $userEmail,
//                 $userPw
//             );
//         }
//     }
// }








?>