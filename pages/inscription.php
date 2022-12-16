<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link href="../fontawesome-5/css/all.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
<div class="container">

        <form action="../inc/insertClient.php" method="post">
            <div class="row">

            <div class="col-md-6" id="left">
                <h2 id="soratra">Bienvenu dans </h2>
                <h2 id="soratra2">l'agence d'habitation BOB</h2>
                <p id="soratra2">Entrez vos donnees personnelles et rejoignez l'agence BOB</p>
            </div>

                <div class="col-md-6" id="inscription">

                    <div class="col-md-2"></div>

                    <div class="col-md-8">

                        <p id="agence"><i class="fas fa-home fa-2x" id="icon2"></i> Agence BOB</p>
                        <h2 id="h2">inscription</h2>
                        <p id="acces"> Acces gratuit pour les client de notre agence </p>

                        <input type="text" name="nom" id="nom" placeholder="Nom" required>
                        <input type="text" name="numero" id="numero" placeholder="phone number" required>
                        <input type="email" name="mail" id="mail"placeholder="Email@gmail.com" required>
                        <input id="mdp" type="password" name="password" placeholder="Password" required>
                        <input id="bouton" type="submit" value="S'inscrire">

                        <div id="connexion">
                            <a href="login.php">Vous avez deja un compte?</a>
                        </div>

                    </div>

                    <div class="col-md-2"></div>  

                </div>

            </div>

        </form>
</body>
</html>