<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupération des données du formulaire
    $nom = $_POST['Nom'];
    $email = $_POST['Email'];
    $telephone = $_POST['Telephone'];
    $message = $_POST['Message'];

    // Envoi de l'email
    $to = "senjobetud@gmail.com";
    $subject = "Demande devis | " . $nom;
    $body = "Nom : " . $nom . "\n\n" . "Email : " . $email . "\n\n" . "Téléphone : " . $telephone;
    $txt =  $message;
    $headers = $email . "\r\n" .
        "CC: senjobetud@gmail.com";

    if (mail($to, $subject, $body, $txt, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de votre message.";
    }
}