<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 5</title>
    </head>
    <body>
        
        <form method="post" action="index.php">
            
            <label for="civility">Civilité :</label>
            <select id="civility" name="civility"><option selected>Mr</option>
                <option>Mme</option></select>
            <label for="lastname">Nom : <input type="texte" name="lastname" id="lastname"></label>
            <label for="firstname">Prénom : <input type="texte" name="firstname" id="firstname"></label>
            <input type="submit" />
        </form>
        
     <?php
     
     if(isset($_POST['civility']) and isset($_POST['firstname']) and isset($_POST['lastname'])) {

     ?>

        <p>Bonjour à vous <?= $_POST['civility'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] ?>!</p> 
        
     <?php } else {
         echo "Merci de bien remplir toutes les demandes.";
     } ?>
        
    </body>
</html>
