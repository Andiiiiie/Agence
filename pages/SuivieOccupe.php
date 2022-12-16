<?php include('../inc/Fonction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="SuivieOccupe.php" method="POST">
        <p>Annee: <input type="number" name="annee" id=""></p>
        <p>Mois: <input type="number" name="mois" ></p>
        <input type="submit" value="valider">
        <?php if(isset($_POST['annee'])) { ?>
            <p>aona:<?php echo getJourMois($_POST['mois'],$_POST['annee'])?></p>
        <?php } ?>
    </form>
</body>
</html>