<?php require("php/header.php")?>
<?php require("php/nav.php")?>

<?php echo 
"<form action='index.php' method='post' class='container d-flex flex-column justify-content-center align-items-center my-3'>
    <label for='userEmail'>Entrez votre mail:</label>
    <input type='email' name='userEmail' required>
    <label for='userPw'>Entre votre mot de passe:</label>
    <input type='password' name='userPw' required>
    <span id='toggle_pwd'><i class='fas fa-eye-slash'></i></span>
    <button type='submit' name='submitUser' class='btn btn-primary mt-3'>M'enregistrer</button>
    <button type='submit' name='submitLogin' class='btn btn-primary mt-3'>Me connecter</button>
</form>
"
?>

<?php require("php/footer.php")?>
<?php require("php/closeIndex.php")?>