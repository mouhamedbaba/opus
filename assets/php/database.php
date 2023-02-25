<?php

try {
    $hostame = 'localhost';
    $database = 'opusbuyer';
    $username = 'root';
    $password = '';
    $db = new PDO("mysql:host=$hostame;dbname=$database", $username, $password);
} catch (PDOException $e) {
    die('failed ' . $e);
}
if (isset($_POST['nom']) && isset($_POST['email'])) {
    if (empty($_POST['nom']) || empty($_POST['email'])) {
        die('Erreur ');
    } else {
        $sql = 'INSERT INTO info_user(Nom, Email, Telephone, Societe) VALUE (?,?,?,?)';
        $resultat = $db->prepare($sql);
        $resultat->execute(array($_POST['nom'], $_POST['email'], $_POST['Telephone'], $_POST['Societe']));
        $nbIns =  $resultat->rowCount();
    }
}
