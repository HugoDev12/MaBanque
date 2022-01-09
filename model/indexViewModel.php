<?php 
// if (!empty($_POST["userEmail"]) && !empty($_POST["userPw"])){

//     $userMail = htmlspecialchars($_POST["userEmail"]);
//     $userPw = htmlspecialchars($_POST["userPw"]);

//     $user = toLog($dbh, $userMail, $userPw);

//     if ($user === false) {
//         echo "<aside><p class='p-3 mb-2 bg-danger text-white text-center'>Les informations rentrées ne permettent pas de vous identifier.</p></aside>";
//         require_once "./vue/loginView.php";
//     } else {
//         session_start();
//         $_SESSION["user"] = $userMail;
//         $_SESSION["userId"] = $user["id"];
//         // var_dump($_SESSION["userId"]);
//         // // echo "informations valides";
//         echo "<h1>Bonjour " . $_SESSION["user"] . "</h1>";
//         echo addAccount();
//         $userAccounts = getUserAcc($dbh, $_SESSION["userId"]);
  
//         // // var_dump($userAccounts);
//     }
// } else {
//     echo "<aside><p class='p-3 mb-2 bg-danger text-white text-center'>Les champs ne peuvent être vides !</p></aside>";
//     require_once "./vue/loginView.php";
// }




// echo "test login";
?>