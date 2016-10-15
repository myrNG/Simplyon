<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>QCM</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <?php

        $_GET['pays'];
        $espagne= "Bonne réponse, c'est bien le drapeau de l'Espagne!";
        $france = "FAUX! Il s'agit de celui de la France...";
        $italie = "FAUX! Il s'agit de celui de l'Italie...";

     ?>
    <body>
        <div id="container">
            <h1>QCM</h1>
            <h2>Quel est le drapeau de l'Espagne?</h2>
            <div id="divFormulaire">
                    <form action="qcm.php" name="formulaire" method="get">
                        <input type="radio" name="pays" value="france"/>
                        <img width="100" height="100" src="france.png" alt="France" />
                        <input type="radio" name="pays" value="espagne"/>
                        <img width="100" height="100" src="spain.png" alt="Espagne" />
                        <input type="radio" name="pays" value="italie"/>
                        <img width="100" height="100" src="italy.png" alt="Italie" />
                        <div class="bouton">
                            <button type="submit" value="valider">Valider</button>
                        </div>

                    </form>
            </div>
            <p id="reponse">
                <?php
                if(isset($_GET['pays'])) {
                    if($_GET['pays'] === 'espagne') {
                        echo $espagne;
                    } elseif($_GET['pays'] === 'france') {
                        echo $france;
                    } elseif($_GET['pays'] === 'italie') {
                        echo $italie;
                    }
                }

                ?>
            <p>
        </div>
    </body>
</html>
