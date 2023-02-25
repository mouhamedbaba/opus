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
if (isset($_POST['Nom']) && isset($_POST['Email'])){
    if(empty($_POST['Nom']) || empty($_POST['Email']))
    {
        die('Erreur ');
    } else{
        $sql = 'INSERT INTO info_user(Nom, Email, Telephone, Societe) VALUE (?,?,?,?)';
        $resultat = $db ->prepare($sql);
        $resultat->execute(array($_POST['Nom'],$_POST['Nmail'],$_POST['Telephone'],$_POST['Societe']));
        $nbIns =  $resultat->rowCount();
    }
}