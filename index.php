<?php 
require_once "model/db_connect.php";

session_start();
if (!isset($_SESSION["user"])){
  header("Location: Login.php");
  exit();
}

require_once "vue/indexView.php";



$dhb = null;
$state = null;
?>












































<!-- // include_once("php/header.php");
// include_once("php/nav.php");
// require("php/config_db.php");
// require("php/addAccount.php");
// if (!isset($_POST['submitUser']) || !isset($_POST['submitLogin'])) {
//   include_once("sign-up.php");
// } 


// if (isset($_POST['submitUser'])) {
//   $userEmail = htmlspecialchars($_POST['userEmail']);
//   $userPw = htmlspecialchars($_POST['userPw']);
//   $date = date("Y-m-d H:i:s");
//   // $_SESSION['user'] = $userEmail;
//   $sqlQueryRegister = "INSERT INTO user (user_mail, user_pw, login_creation) VALUES ('$userEmail','$userPw','$date')";
//   $state = $dbh->prepare($sqlQueryRegister);
//   $state->execute();
// }



// else if (isset($_POST['submitLogin'])) {
//   $checkEmail = htmlspecialchars($_POST['userEmail']);
//   $checkPw = htmlspecialchars($_POST['userPw']);
//   // $_SESSION['user'] = $checkEmail;
//   $sqlQueryLogin = "SELECT * FROM user WHERE user_mail = '$checkEmail' AND user_pw = '$checkPw'";
//   $state2 = $dbh->perpare($sqlQueryLogin);
//   $state2->execute();
//   $result = $state2->fetchAll();
//   print_r($result);
// }

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


  // echo '<div class="container-fluid row d-flex justify-content-center mt-5" id="homeMain">';
  //   require("php/accountList.php");
    
  // echo '</div>';


  // echo '<script src="./js/security.js"></script>';
  // echo '<script src="./js/addAccount.js"></script>'; -->




  <!-- // $sqlQueryLogin = "SELECT * FROM user";
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

  // if (isset($_POST['submitUser'])){

  //   $userEmail = htmlspecialchars($_POST['userEmail']);
  //   $userPw = htmlspecialchars($_POST['userPw']);
  //   $today = date("Y-m-d");
  //   $_SESSION['user'] = $userEmail;

  //   $sqlQueryRegister = "INSERT INTO user (
  //     user_mail,
  //     user_pw,
  //     login_creation)
  //     VALUES (?,?,?)";
  //   $userDatas = $dbh->prepare($sqlQueryRegister);
  //   $userDatas->execute([$userEmail,$userPw,$today]);

  //   echo '<div class="alert alert-success" role="alert">
  //   <p class="text-center">Bonjour '.$_SESSION['user'].' et bienvenue sur le site !</p>
  //         </div>';

  //   require("php/accountList.php");
  //   echo "<div class='row d-flex justify-content-center'>";
  //   echo addAccount();
  //   echo accountList();
  //   echo "</div>";

  // } -->




<!-- // if(!isset($loggedUser)){
//   if(isset($errorMessage)) {
//     echo '<div class="alert alert-danger" role="alert">
//       <p class="text-center">'.$errorMessage.'</p>
//     </div>';
//   } 
// } 

// else {
//   echo '<div class="alert alert-success" role="alert">
//       <p class="text-center">Bonjour '.$_SESSION['user'].' et bienvenue sur le site !</p>
//   </div>';
//   require("php/accountList.php");
// } -->






  
  <!-- // echo '<div class="container-fluid row d-flex justify-content-center mt-5" id="homeMain">';
  //   require("php/accountList.php");
    
  // echo '</div>';
  
  
  // require("php/footer.php");
    // echo '<script src="./js/security.js"></script>';
    // echo '<script src="./js/addAccount.js"></script>';
  // require("php/closeIndex.php");
  // include_once("php/footer.php");
  // include_once("php/closeIndex.php"); 




