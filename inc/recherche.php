<?php
    include('Fonction.php');
    $motCle=$_POST['chercher'];
    // echo $motCle;
    // $liste=recherche($motCle);
    header("location:../pages/acceuilClient.php?found=".$motCle);
?>