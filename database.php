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
if (isset($_POST['Nom']) && isset($_POST['Email']) && isset($_POST['Telephone']) && isset($_POST['Societe'])) {
    if (empty($_POST['Nom']) && empty($_POST['Email']) && empty($_POST['Telephone']) && empty($_POST['Societe'])) {
        die('Erreur ');
    } else {
        $sql = 'INSERT INTO info_user(Nom, Email, Telophone, Societe)
         VALUE (?,?,?,?)';
        $resultat = $db->prepare($sql);
        $resultat->execute(array($_POST['Nom'], $_POST['Email'], $_POST['Telephone'], $_POST['Societe']));
        $nbIns =  $resultat->rowCount();

        if ($nbIns > 0) {
            echo "bravo";
        } else {
            echo "oups !";
        }
    }
}
?>