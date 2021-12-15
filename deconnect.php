<?php 
require("php/header.php");
require("php/nav.php");
session_destroy();
echo "<h1>Vous avez bien été déconnecté</h1>";
require("php/footer.php");
?>