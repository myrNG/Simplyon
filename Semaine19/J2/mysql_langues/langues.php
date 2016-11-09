<?php
// FIXME : Ajouter la langue (tableau relationnel)
/*
SELECT langues.id, pays.id_langue
FROM langues, pays
WHERE langues.langues= pays.ID

*/
    try {
    // on ouvre une connexion à la base de données
    $connexion = new PDO(
        'mysql:host=localhost;dbname=Questionnaire;charset=utf8',
        'root', 'root');
    } catch (Exception $excp) {
    die('Erreur : ' . $excp->getMessage());
    }
    // FIXME : Vérifier si c'est ok de ne pas mettre 'image' dans la if ET la stocker quand même dans une variable.
    if( isset($_POST['nom']) && isset($_POST['capitale'])){
    $nom = $_POST['nom'];
    $capitale = $_POST['capitale'];
    $drapeau= $_POST['drapeau'];
    //$langue=$_POST['langue'];

    $qInsertion = "INSERT INTO pays (nom, capitale, drapeau) "
                    ." VALUES ( :nom, :capitale, :drapeau)";
    $rq = $connexion->prepare($qInsertion);
    $rq->bindParam(":nom", $nom, PDO::PARAM_STR);
    $rq->bindParam(":capitale", $capitale, PDO::PARAM_STR);
    $rq->bindParam(":drapeau", $drapeau, PDO::PARAM_STR);

    $rq->execute();
    }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Questionnaire Langues</title>
        <style media="screen" type="text/css">
            body {
                font-family: Helvetica, sans-serif;
            }
            h3 {
                text-align: center;
                text-transform: uppercase;
                color: #EF6461;
                letter-spacing: 5px;
            }
            .questionnaire {
                max-width: 900px;
                margin: 5% auto;
            }
            table {
                width: 100%;
            }
            th, td {
                text-align: left;
                width: 33%;
            }
            img {
                vertical-align: middle;
                margin-left: 20px;
                border-radius: 50%;
            }
        </style>
    </head>
    <body>
        <div class="questionnaire">
            <!-- Formulaire d'Ajout d'un pays  -->
            <form id="formulaire" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="">
                    <h3>Ajouter un pays</h3>
                        <!-- Pays -->
                        <label for="champPays">Pays</label>
                        <input type="text" name="nom">
                        <!-- Capitale -->
                        <label for="champCapitale">Capitale</label>
                        <input type="text" name="capitale">
                        <!-- Drapeau -->
                        <label for="champDrapeau">Drapeau</label>
                        <input type="file" name="drapeau">
                        <!-- Langue -->
                        <label for="champLangue">Langue</label>
                        <select  name="langue">
                            <option value="french">français</option>
                            <option value="spanish">espagnol</option>
                            <option value="portugese">portugais</option>
                            <option value="english">anglais</option>
                            <option value="japanese">japonais</option>
                            <option value="korean">coréen</option>
                            <option value="german">allemand</option>
                        </select>
                </div>
                <button name="button">Ajouter</button>
            </form>
            <!-- Affichage du tableau des pays -->
            <div class="tableau">
                <h3>Tableau des pays :</h3>
                <?php
                $requete = "SELECT * FROM pays";
                $resultats = $connexion->query($requete);

                while ($pays=$resultats->fetch()) {
                //echo "<div>" . $pays['nom'] . " » " . $pays['capitale'] . "<img src=" .$pays['drapeau'] ." width='40'></div>";
                echo "<table>
                            <tr>
                                <td>" . $pays['nom'] . "</td>
                                <td>" . $pays['capitale'] . "</td>
                                <td><img src=" . $pays['drapeau'] . " width='40'</td>
                                <td>" . $langue['langue'] . "</td>
                            </tr>
                        </table>";
            }
                $resultats->closeCursor();
                 ?>

            </div>
        </div>

    </body>
</html>
