<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>MaBanque.fr</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/mabanque.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
  integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <meta name="theme-color" content="#fafafa">
</head>

<body>
<header class="d-flex flex-column align-items-center justify-content-between" id="title">

<div id="headerTitle" class="d-flex align-items-end">
    <h1>GestioBanque</h1>
</div>

<?php if(isset($_POST['submitUser'])) {
  echo '<p>Bonjour '.$_SESSION["user"]. '</p>
        <div class="align-self-end" class="headerBtn">
          <a href="deconnect.php" class="btn btn-secondary">Déconnexion</a>
        </div>';
        
        
}
?>

<?php if (!isset($_POST['submitUser'])) {
  echo  ' <div class="align-self-md-end" class="headerBtn">
            <a href="login.php" class="btn btn-outline-secondary">Login</a>
            <a href="sign-up.php" class="btn btn-secondary">Sign-up</a>
          </div>';
}
?>

<?php echo "</header>" ?>