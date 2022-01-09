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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
  integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <meta name="theme-color" content="#fafafa">
</head>

<body>
<header class="d-flex flex-column align-items-center justify-content-center" id="title">
    <h1>GestioBanque</h1>
    <?php if(isset($_SESSION) && isset($_SESSION["user"])): ?> problème sur condition de la session ici
      <a href="./deconnect.php" class="btn btn-info">Log-out</a>
    <?php else: ?>
      <a href="./index.php" class="btn btn-info">Sign-up</a>
    <?php endif ?>
</header>
