<?php
try {
    $dbh = new PDO(
        'mysql:host=localhost;dbname=mabanque;charset=utf8',
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
}
catch (Exception $e) {
    die('Erreur : '.$e -> getMessage());
}
?>