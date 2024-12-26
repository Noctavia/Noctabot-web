<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les informations du formulaire
    $nom = $_POST['nom'];
    $montant = $_POST['montant'];
    $email = $_POST['email'];

    // Vérifier que les champs sont remplis
    if (!empty($nom) && !empty($montant) && !empty($email)) {
        // Effectuer des opérations de paiement ici (simulation)
        $paiementReussi = true; // Supposons que le paiement est réussi

        if ($paiementReussi) {
            echo "<h3>Le paiement de $montant€ pour $nom a été effectué avec succès.</h3>";
        } else {
            echo "<h3>Le paiement a échoué. Veuillez réessayer.</h3>";
        }
    } else {
        echo "<h3>Veuillez remplir tous les champs.</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de paiement</title>
</head>
<body>

<h2>Formulaire de paiement</h2>

<form method="POST" action="">
    <label for="nom">Nom :</label><br>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="email">Email :</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="montant">Montant :</label><br>
    <input type="number" id="montant" name="montant" required><br><br>

    <input type="submit" value="Effectuer le paiement">
</form>

</body>
</html>
