
<?php require("php/header.php");
 require("php/nav.php");
 require("php/accounts.php");

 if(!empty($_GET) && isset($_GET["id"])) {
    $id = htmlspecialchars($_GET["id"]);
 } else {
    $error = "Hum je ne connais pas cet article.";
 }
?>



<section class="container d-flex flex-column justify-content-center align-items-center mt-5">
   <h2 class="mb-5">Détails du compte</h2>
   <ul class="list-group">

   <?php 
   $accounts = get_accounts();
   foreach($accounts[$id] as $key => $value) {
      echo "<li class='list-group-item'> $key : $value</li>";
      
   }
   ?>
   
   </ul>
   <a href="index.php" class="mt-5 btn btn-dark">Retour</a>
</section>



<?php require("php/footer.php");
require("php/closeIndex.php")?>