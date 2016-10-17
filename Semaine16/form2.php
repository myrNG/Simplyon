<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Formulaire - Semaine 16 - Jour 1</title>
    </head>
    <body>
        <?php
        $nom = isset($_POST['nom']) ? $_POST['nom'] : 'non renseigné';
            echo "<p>Nom: " . $nom ."</p>";
        $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : 'non renseigné';
            echo "<p>Prenom: " . $prenom ."</p>";
        $ville = isset($_POST['ville']) ? $_POST['ville'] : 'non renseigné';
            echo "<p>Ville :" . $ville ."</p>";
        $majeur = isset($_POST['majeur']) ? 'majeur' : 'mineur';
            echo "<p>" .$majeur.  "</p>";

        ?>

        <form action="form2.php" method="post">
            <label for="name">Nom</label>
            <input type="text" name="nom" value="">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" value=""><br>
            <label for="ville">Ville</label>
            <input type="radio" name="ville" value="paris">Paris
            <input type="radio" name="ville" value="lyon">Lyon
            <input type="radio" name="ville" value="marseille">Marseille<br>
            <label for="majeur">Majeur</label>
            <input type="checkbox" name="majeur" value="true"><br>
            <button type="submit" name="button">Saisir</button>
        </form>

    </body>
</html>
