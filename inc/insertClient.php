<?php
    include('Fonction.php');
    insertClient($_POST['mail'],$_POST['nom'],$_POST['password'],$_POST['numero']);
    session_start();
    $_SESSION['connecte']=getIdClient($_POST['mail'],$_POST['password']);
    header("location:../pages/acceuilClient.php");
    //makany @ acceuil
    //echo "mety ";