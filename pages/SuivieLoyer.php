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
    <form action="SuivieLoyer.php" method="POST">
        <p>Annee: <input type="number" name="annee" id=""></p>
        <p>Mois: <input type="number" name="mois" ></p>
        <input type="submit" value="valider">
        <?php if(isset($_POST['annee'])) { ?>
            <p>aona:<?php echo getJourMois($_POST['mois'],$_POST['annee'])?></p>
            <div>
    <canvas id="myChart"></canvas>
</div>
<script src="js/dist/chart.js"></script>
<script>
    <?php if(isset($_POST['annee'])) { ?>
        const labels = [
            <?php for($j=1;$j<getJourMois($_POST['mois'],$_POST['annee']);$j++ ) {
                echo $j."," ?>
            <?php } ?>
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'courbe de suivie loyer : ',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                // data: [0, 10, 5, 2, 20, 30, 45],
                data:[
                <?php for($i=1;$i<=getJourMois($_POST['mois'],$_POST['annee']);$i++) { ?>
                    <?php if(getSommeLoyer($_POST['mois'],$_POST['annee'],$i)=="") {  echo "0,"; ?>
                        <?php } else {  echo getSommeLoyer($_POST['mois'],$_POST['annee'],$i)."," ?>
                    <?php } ?>
                <?php } ?>
                ]
            }]
        };
        

        const config = {
            type: 'line',
            data: data,
            options: {}
        };
    <?php } ?>
</script>
<script>
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
            
        <?php } ?>
    </form>
</body>
</html>