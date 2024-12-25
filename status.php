<?php
session_start();
if (isset($_SESSION['user_id'])) {
    echo "Bonjour, " . $_SESSION['username'] . "! Vous êtes connecté.";
} else {
    echo "Vous n'êtes pas connecté. <a href='login.php'>Connectez-vous</a>";
}
?>