<?php include('../inc/Fonction.php'); 
    if(isset($_POST['id']))
    {
        updateHabitat($_POST['id'],$_POST['type'],$_POST['nbChambre'],$_POST['loyer'],$_POST['quartier'],$_POST['description']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_GET['idHabitat'])) { 
        $liste=getHabitatById($_GET['idHabitat']); ?>
        <form action="modifierHabitat.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['idHabitat']; ?>">
        <p>type: <input type="text" name="type" value="<?php echo $liste[0]['type'] ?>" ></p>
        <p>nombre de chambre: <input type="number" name="nbChambre" value="<?php echo $liste[0]['nbChambre'] ?>"></p>
        <p>loyer: <input type="text" name="loyer" value="<?php echo $liste[0]['loyer'] ?>"></p>
        <p>quartier: <input type="text" name="quartier" value="<?php echo $liste[0]['quartier'] ?>"></p>
        <p>description <input type="text" name="description" value="<?php echo $liste[0]['description'] ?>"></p>
        <input type="submit" value="valider">
        </form>
    <?php } else{
        header("location:acceuilAdmin.php");
    } ?>
</body>
</html>