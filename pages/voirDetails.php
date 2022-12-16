<?php include('../inc/Fonction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style4.css">
    <link href="../fontawesome-5/css/all.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_GET['id'])) { 
        $habitat=getDonneesHabitat($_GET['id']); ?>
        <div class="container">
        <div class="row">
        <div class="col-md-6" id="left">
        <img height="400px" width="550px" src="../assets/images/logo.jpg" alt="">
        </div>
        <div class="col-md-6" id="right">
        <h1>Type: <?php echo $habitat[0]['type']; ?></h1>
            <p id="nb">Nombre de chambre: <?php echo $habitat[0]['nbChambre']; ?></p>
            <p>Description: <?php echo $habitat[0]['description'];?></p>
            <p id="loyer">Loyer : <?php echo $habitat[0]['loyer'];?></p>
        </div>

        </div>

        <div class="row2">
            <div class="col-md-6" id="gauche">
                <button id="reserver">Reserver</button>
                <button id="calendrier">Voir calendrier</button>
            </div>
            <div class="col-md-6"></div>


        </div>
        <div class="row3">
            <div class="col-md-12" id="album">
                <h2>Album de l'habitation:</h2>
                <hr>
                <?php 
                $liste=getPhotosHabitat($_GET['id']);
                for($i=0;$i<sizeof($liste);$i++){?>
                <div class="image"><img src="../assets/images/<?php echo $liste[$i]['source']; ?>" alt="" width="350px" height="300px"></div>
                <?php } ?>
                

                    <input type="submit" value="Ajouter image" id="add">

                
            </div>
        </div>

        <div class="row4">
        <div class="col-md-12" id="footer">
            <p id="bas">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        </div>

    <?php } ?>
</body>
</html>