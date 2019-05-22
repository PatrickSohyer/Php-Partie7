<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 8</title>
    </head>
    
                        
        <?php
    
        if (isset($_POST['civility']) AND isset($_POST['lastname']) AND isset($_POST['firstname']) AND isset($_FILES['myFile']) AND $_FILES['myFile']['error'] == 0) {
            $fileInformation = pathinfo($_FILES['myFile']['name']);
            $fileName = $fileInformation['filename'];
            $fileExtention = $fileInformation['extension'];
            ?>
        <p>Votre fichier se nomme <?= $fileName; ?>.</p>
        <p>L'extension du fichier est <?= $fileExtention; ?>.</p>
            <?php
            if ($fileExtention == 'pdf') {
                ?><p>Votre fichier <?= $_FILES['myFile']['name']; ?> est au format pdf.</p>
                <?php
            } else {
                ?> 
                
                <p>Ton fichier <?= $_FILES['myFile']['name']; ?> n'est pas au format pdf.</p>
                
            <?php
        }
        ?>
       
                 <p>Bonjour à vous <?= $_POST['civility'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] ?>, voila le nom de votre fichier <?= $_FILES['file']['name']; ?> et voici le type du fichier <?= $_FILES['file']['type']; ?>!</p> 
        <?php
    } else {
         
     ?>
       
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <div id="form">
                <select name="civility">
                    <option value="Monsieur">Mr</option>
                    <option value="Madame">Mme</option>
                </select>
                <label for="lastname">Nom : </label>
                <input type="text" name="lastname" />
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" />
                <label for=""></label>
                <input type="file" name="myFile" />
                <input type="submit" value="Valider" />
            </div>
        </form>
        
    <?php 
    
    } 
    
    ?>
        
    
</html>