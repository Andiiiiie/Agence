<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../inc/reserver.php" method="POST">
        <input type="hidden" name="habitat" value="1">
        <input type="hidden" name="client" value="2">
        <p>Date arrivee <input type="date" name="arrivee"></p>
        <p>Date depart <input type="date" name="depart"></p>
        <input type="submit" value="valider">
        <?php if(isset($_GET['error'])) { ?>
            <h1>erreur</h1>
        <?php } ?>
    </form>
</body>
</html>