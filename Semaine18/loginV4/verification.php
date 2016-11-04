<?php
    // SI tous les champs sons saisis:
    if(isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['mdpBis'])) {
        // Stockage des champs
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $mdpBis = $_POST['mdpBis'];

        // 4 caractères minimum
        if(strlen($email) > 3 && strlen($mdp) > 3) {
            // mot de passe et confirmation identiques
            if($mdp === $mdpBis) {
                // Début de session
                session_start();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['mdp'] = $_POST['mdp'];
                $_SESSION['mdpBis'] = $_POST['mdpBis'];

                // Si tout est Ok, on affiche "Compte crée!  Mail envoyé à $email!"
                echo '<p>Votre compte a été créé! Un email de confirmation vous a été envoyé à ' .$email; " </p>";
            } else {
                // Message d'erreur de saisie
                echo '<p>Erreur de saisie de mot de passe</p>';
            }
        } else {
                // Message d'erreur générale
            echo "<p>Saisir 4 caractères au minimum!</p>";
        }
    }
 ?>
