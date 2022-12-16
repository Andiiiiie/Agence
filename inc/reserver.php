<?php
    include('Fonction.php');
    echo $_POST['arrivee'];
    echo "  et ".$_POST['depart'];
    if(isFree($_POST['arrivee'],$_POST['depart'],$_POST['habitat']))
    {
        insertReservation($_POST['arrivee'],$_POST['depart'],$_POST['habitat'],$_POST['client']);
        header("location:../pages/acceuilClient.php");
    }
    else
    {
        header("location:../pages/reservation.php?error=0");
    }
?>