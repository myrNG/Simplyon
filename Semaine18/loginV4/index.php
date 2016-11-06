<?php
    $errorMessage = '';
    $savedEmail = '';

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
                $user = [
                    "email" => $email,
                    "mdp" => $mdp
                ];
                $loginFailed = false;
            } else {
                // Message d'erreur de saisie
                $loginFailed = true;
                $savedEmail = 'value="'.$email.'"';
                $errorMessage = '<div class="">Erreur d\'identification</div>';
            }
        }
    }
 ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bienvenue - Page d'identification</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            // Si l'utilisateur ne s'est pas identifié, lui proposer de le faire :
            if(!isset($user)) {
        ?>
        <div class="mdl-layout mdl-js-layout">
            <div class="mdl-layout__content">
                <!-- Div du formulaire -->
                <div class="mdl-card mdl-shadow--6dp">
                    <!-- Titre -->
                    <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
                        <h2 class="mdl-card__title-text">Identification</h2>
                    </div>
                    <!-- Formulaire -->
                    <div class="mdl-card__supporting-text">
                        <?php /*if (isset($loginFailed)) */ echo $errorMessage; ?>
                        <form id="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                            <!-- Email -->
                            <div class="mdl-textfield mdl-js-textfield champs">
                                <label class="mdl-textfield__label" for="email">Email </label>
                                <input class="mdl-textfield__input" type="text" name="email" placeholder="Email">
                            </div><br>
                            <!-- Mot de passe -->
                            <div class="mdl-textfield mdl-js-textfield champs">
                                <label class="mdl-textfield__label" for="mdp">Mot de passe: </label>
                                <input class="mdl-textfield__input" type="password" name="mdp" placeholder="Mot de passe">
                            </div><br>
                            <!-- Confirmation mot de passe -->
                            <div class="mdl-textfield mdl-js-textfield champs">
                                <label class="mdl-textfield__label" for="mdpBis">Confirmation: </label>
                                <input class="mdl-textfield__input" type="password" name="mdpBis" placeholder="Confirmation">
                            </div><br>
                            <!-- Bouton -->
                                <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect connect" type="submit" name="button">Connexion</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?php
    } else {
        /*include "validation.php";*/
         ?>
         <!-- Sinon, validation Ok : -->
         <div class="mdl-layout__content">
             <div class="mdl-card mdl-shadow--6dp">
                 <!-- Titre -->
                 <div class="mdl-card__title">
                     <h3 class="mdl-card__title-text">Merci!</h3>
                 </div>
                 <!-- Message -->
                 <div class="mdl-card__supporting-text">
                     Compte crée! Un email a été envoyé à <?php echo $email; ?> !
                 </div>
                 <!-- Bouton Deconnection eventuellemet -->
                 <div class="mdl-card__actions">
                     <?php
                         if( isset($user) )
                             echo '<a href="'.$_SERVER['PHP_SELF'].'">Déconnexion</a>';
                     ?>
                 </div>
             </div>
         </div>

         <?php } ?>
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    </body>
</html>
