
<?php require("php/header.php");
 require("php/nav.php");
 require("php/accounts.php");

 if(!empty($_GET) && isset($_GET["id"])) {
    $id = htmlspecialchars($_GET["id"])+1;
 } else {
    $error = "Hum je ne connais pas cet article.";
 }
?>



<section class="container d-flex flex-column justify-content-center align-items-center mt-5">
   <h2 class="mb-5">Détails du compte</h2>

   <ul class="list-group">
   <?php 
   // $accounts = get_accounts();
   require("php/config_db.php");
   $sqlQuery = "SELECT * FROM account_details WHERE account_details.account_id = $id";
   $details = $dbh->prepare($sqlQuery);
   $details->execute();
   $datas = $details->fetchAll();
   print_r($datas);
   // foreach($datas as $key => $value) {
   //    echo $value;
      // echo "<li class='list-group-item'> $key : $value</li>";
      
   // }
   // foreach($datas as $key => $data) {
   //    echo "<li class='list-group-item'>$key : $data</li>";

      // foreach ($data as $key => $value){
      //    echo "<li class='list-group-item'>$key : $value</li>";
      // }
   // }
   ?>
   </ul>
   
   <a href="index.php" class="mt-5 btn btn-dark">Retour</a>
</section>



<?php require("php/footer.php");
require("php/closeIndex.php")?>