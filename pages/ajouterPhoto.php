<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_GET['id'])) { ?>
        <h1><?php echo $_GET['id']; ?></h1>
        <form method="post" action="../inc/addPhoto.php" enctype="multipart/form-data">
            <input type="hidden" name="habitat" value="<?php echo $_GET['id']; ?>">
            <input type="hidden" name="MAX_FILE_SIZE" value="5242880"> <!--on informe la taille max à envoyer, ici un peu + 5Mo-->
            <input type="file" name="nom_du_fichier">    
            <input type="submit" value="Envoyer" name="envoyer">
        </form>
    <?php } ?>
</body>
</html>