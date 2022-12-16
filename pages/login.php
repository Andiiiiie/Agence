<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link href="../fontawesome-5/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php if(isset($_GET['admin'])) { ?>
            <form action="../inc/ConnexionAdmin.php" method="POST">    
        <?php } else { ?>
            <form action="../inc/ConnexionClient.php" method="POST">
        <?php } ?>
        <div class="row">
            <div class="col-md-6" id="left">
                <h2 id="soratra">Bienvenu dans </h2>
                <h2 id="soratra2">l'agence d'habitation BOB</h2>
                <p id="soratra2">Entrez vos donnees personnelles et rejoignez l'agence BOB</p>
            </div>
        
            <div class="col-md-6" id="connexion">
                <div class="col-md-2"></div>

                <div class="col-md-8">
                    <p id="agence"><i class="fas fa-home fa-2x" id="icon2"></i> Agence BOB</p>
                    <h2 id="h2">Connexion</h2>
                    <p id="acces"> Acces gratuit pour les client de notre agence </p>
                    

                    <input id="mail" type="email" name="email" placeholder="Email or phone number"required>
                    <input id="mdp" type="password" name="password" placeholder="Password" required>
                    <?php if(isset($_GET['error'])) { ?>
                        <h2 style="color:red">Indentifiants invalides </h2>
                    <?php } ?>
                    <input id="bouton" type="submit" value="Login">
                    <div id="inscription">
                    <a href="inscription.php">Creer un compte?</a>
                    </div>
                </div>


                <div class="col-md-2"></div>
            </div>
            
        </div>
        </form>

    </div>
</body>
</html>