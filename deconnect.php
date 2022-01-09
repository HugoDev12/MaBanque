<?php 
session_start();
include_once("vue/template/header.php");
include_once("vue/template/nav.php");

    session_unset();
    session_destroy();
    // echo "<h1>Vous avez bien été déconnecté</h1>";
    echo "<section class='mt-3 d-flex flex-column justify-content-center align-items-center'>
        <h2 class = 'p-3 mb-2 bg-success text-white'>Vous avez bien été déconnecté</h2>
        <a href='./index.php' class='btn btn-info'>Sign up</a>
    </section>";
    // header("Location: index.php");
    // exit();
    // require_once "vue/loginView.php";

include_once("vue/template/footer.php");
?>