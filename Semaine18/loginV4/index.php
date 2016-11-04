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
                        <form id="" action="verification.php" method="post">
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

        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    </body>
</html>
