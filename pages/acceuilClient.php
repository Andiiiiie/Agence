<?php include('../inc/Fonction.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style3.css">
    <link href="../fontawesome-5/css/all.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div id="all">
        <div id="top">
            <div id="logo">
                <img height="60" width="100" src="../assets/images/logo.jpg" alt="">
            </div>
            <div id="recherche">
                <form action="../inc/recherche.php" method="post">
                    <input type="text" name="chercher" id="chercher" placeholder="Rechercher une maison">
                    <div id="loupe">
                    <button type="submit" id="search"><i class="fa fa-search fa-2x" id="icon"></i></button>
                    </div>
                </form>
            </div>
            <div id="deconnexion">
                <p id="out">Log out</p>
                <div id="droite">
                <a href="../inc/deconnexion.php"><i class="fa fa-sign-out-alt fa-2x" id="icon2"> </a></i>
                </div>


            </div>
        
        </div>
        <div id="mid">
            <!-- <nav class="navbar navbar-inverse" id="lesnavs">
                    <ul class="nav navbar-nav">
                    <li role="presentation"><a href="#">Accueil</a></li>
                    <li role="presentation"><a href="#">Lorem.</a></li>
                    <li role="presentation"><a href="#">Lorem.</a></li>
                    <li role="presentation"><a href="#">Lorem.</a></li>
                    <li role="presentation"><a href="#">Lorem.</a></li>
                    </ul>
            </nav> -->
        </div>
        <div id="bot">
            <?php if(isset($_GET['found'])){ 
                $liste=recherche($_GET['found']);
                if(sizeof($liste)==0) {?>
                    <h1>AUCUNE CORRESPONDANCE</h1>
                <?php } else { 
                    for($i=0;$i<sizeof($liste);$i++) {?>
                        <div id="maison">
                            <span id="haut">quartier : <?php echo $liste[$i]['quartier']?></span>
                            <div id="image"><img src="../assets/images/logo.jpg" height="200px" width="232px" alt=""></div>
                            <a href="voirDetails?id=<?php echo $liste[$i]['idHabitation'];?>"><button id="bout">voir plus</button></a>
                        </div>
                <?php } }?>
            <?php } else { 
                $liste=getAllHabitat();
                for($i=0;$i<sizeof($liste);$i++){
                ?>
                    <div id="maison">
                        <span id="haut">quartier : <?php echo $liste[$i]['quartier']?></span>
                        <div id="image"><img src="../assets/images/logo.jpg" height="200px" width="232px" alt=""></div>
                        <a href="voirDetails?id=<?php echo $liste[$i]['idHabitation'];?>"><button id="bout">voir plus</button></a>
                    </div>
                <?php }?>
            <?php } ?>
            

        </div>
        <!-- <div id="footer">
            <p id="petitTexte">ProjetAgence - Lorem ipsum dolor sit amet, consectetur.</p>

        </div> -->

    </div>
    
</body>
</html>