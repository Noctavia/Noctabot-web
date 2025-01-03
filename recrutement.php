<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "vearathenicofrance@gmail.com"; // Remplacez par votre adresse email
    $subject = "Nouvelle candidature pour le staff";

    // Récupération des données
    $email = htmlspecialchars($_POST['email']);
    $presentation = htmlspecialchars($_POST['presentation']);
    $discord = htmlspecialchars($_POST['discord']);
    $availability = htmlspecialchars($_POST['availability']);
    $motivation = htmlspecialchars($_POST['motivation']);
    $whyYou = htmlspecialchars($_POST['whyYou']);
    $experience = htmlspecialchars($_POST['experience']);
    $contribution = htmlspecialchars($_POST['contribution']);
    $qualities = htmlspecialchars($_POST['qualities']);
    $flaws = htmlspecialchars($_POST['flaws']);

    // Message
    $message = "Email : $email\n";
    $message .= "Présentation : $presentation\n";
    $message .= "Pseudo Discord : $discord\n";
    $message .= "Disponibilités : $availability\n";
    $message .= "Motivation : $motivation\n";
    $message .= "Pourquoi eux : $whyYou\n";
    $message .= "Expériences : $experience\n";
    $message .= "Contributions : $contribution\n";
    $message .= "Qualités : $qualities\n";
    $message .= "Défauts : $flaws\n";

    // Envoi
    $headers = "From: noreply@votre_domaine.com";
    if (mail($to, $subject, $message, $headers)) {
        echo "Candidature envoyée avec succès.";
    } else {
        echo "Erreur lors de l'envoi de la candidature.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
