<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 7</title>
    </head>
    <body>

        <form method="post" action="index.php" enctype="multipart/form-data">

            <label for="civility">Civilité :</label>
            <select id="civility" name="civility"><option selected>Mr</option>
                <option>Mme</option></select>
            <label for="lastname">Nom : <input type="texte" name="lastname" id="lastname"></label>
            <label for="firstname">Prénom : <input type="texte" name="firstname" id="firstname"></label>
            <label for="file">Fichier : <input type="file" id="file" name="file" /></label>
            <input type="submit" />
        </form>

        <?php
        if (isset($_POST['civility']) and isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_FILES['file'])) {
            ?>

            <p>Bonjour à vous <?= $_POST['civility'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] ?>, voila le nom de votre fichier <?= $_FILES['file']['name']; ?> et voici le type du fichier <?= $_FILES['file']['type']; ?>!</p> 

<?php
} else {
    echo "Merci de bien remplir toutes les demandes.";
}
?>
        <p><a href="http://phpexercice/partie7/exo1/">Partie 7 exerice 1</a></p>
        <p><a href="http://phpexercice/partie7/exo2/">Partie 7 exerice 2</a></p>
        <p><a href="http://phpexercice/partie7/exo3/">Partie 7 exerice 3</a></p>
        <p><a href="http://phpexercice/partie7/exo4/">Partie 7 exerice 4</a></p>
        <p><a href="http://phpexercice/partie7/exo5/">Partie 7 exerice 5</a></p>
        <p><a href="http://phpexercice/partie7/exo6/">Partie 7 exerice 6</a></p>
        <p><a href="http://phpexercice/partie7/exo7/">Partie 7 exerice 7</a></p>
        <p><a href="http://phpexercice/partie7/exo8/">Partie 7 exerice 8</a></p>


    </body>
</html>