<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    <body>
        
       <?php 
       
       if (isset($_GET['lastname']) and ($_GET['firstname'])) {
           echo 'Bonjour' . ' ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
       } else {
           echo 'Je n\'ai pas compris votre demande.';
       }
       
       ?>
        
        
    </body>
</html>
