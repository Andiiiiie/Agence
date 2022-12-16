<?php
    include ('Fonction.php');
    insertHabitation($_POST['type'],$_POST['nbChambre'],$_POST['loyer'],$_POST['quartier'],$_POST['description']);
    //echo getIdHabitat($_POST['description']);
    header("location:../pages/ajouterPhoto.php?habitat=".getIdHabitat($_POST['description']));
?>