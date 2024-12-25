<?php
// Connexion à la base de données
$servername = "localhost";
$username = "Noctavia"; // Changez avec votre nom d'utilisateur
$password = "Kyli@n2?"; // Changez avec votre mot de passe
$dbname = "mysite";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hachage du mot de passe

    // Vérifier si l'utilisateur existe déjà
    $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "Cet email est déjà utilisé.";
    } else {
        // Ajouter l'utilisateur à la base de données
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $query)) {
            echo "Inscription réussie!";
        } else {
            echo "Erreur: " . mysqli_error($conn);
        }
    }
}