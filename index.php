<?php 
require("php/config_db.php");
if (!isset($_POST['submitUser']) || !isset($_POST['submitLogin'])) {
  require("sign-up.php");
} 
// else {


else if (isset($_POST['submitUser'])) {
  require("php/header.php");
  require("php/nav.php");
  $userEmail = htmlspecialchars($_POST['userEmail']);
  $userPw = htmlspecialchars($_POST['userPw']);
  $date = date("Y-m-d H:i:s");
  $_SESSION['user'] = $userEmail;
  $sqlQueryRegister = "INSERT INTO user (user_mail, user_pw, login_creation) VALUES ('$userEmail','$userPw','$date')";
  $state = $dbh->prepare($sqlQueryRegister);
  $state->execute();
}

else if (isset($_POST['submitLogin'])) {
  require("php/header.php");
  require("php/nav.php");
  $checkEmail = htmlspecialchars($_POST['userEmail']);
  $checkPw = htmlspecialchars($_POST['userPw']);
  $sqlQueryLogin = "SELECT * FROM user WHERE user_mail = '$checkEmail' AND user_pw = '$checkPw'";
  $state2 = $dbh->perpare($sqlQueryLogin);
  $state2->execute();
  echo $state2;
}








  

  // echo '<div class="container-fluid row d-flex justify-content-center mt-5" id="homeMain">';
  //   require("php/accountList.php");
    
  // echo '</div>';
  
  
  // require("php/footer.php");
    echo '<script src="./js/security.js"></script>';
    echo '<script src="./js/addAccount.js"></script>';
  // require("php/closeIndex.php");
?>




