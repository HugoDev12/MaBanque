<?php 
require_once "db_requests.php";
if (!empty($_POST) && isset($_POST["submitLogin"])){
    if (empty($_POST["userEmail"]) || empty($_POST["userPw"])){
        echo "<aside><p class='p-3 mb-2 bg-danger text-white text-center'>Les champs ne peuvent être vides !</p></aside>";
    } 
    else {
        $mail = htmlspecialchars($_POST["userEmail"]);
        $pwd = htmlspecialchars($_POST["userPw"]);
        $user = toLog($dbh, $mail, $pwd);

        if (is_array($user)){
            session_start();
            $_SESSION["user"] = $mail;
            $_SESSION["userId"] = $user["id"];
            header("Location: index.php");
            exit();
        } else {
            echo "<aside><p class='p-3 mb-2 bg-danger text-white text-center'>Les informations saisies sont invalides !</p></aside>";
        }
    }
}

?>