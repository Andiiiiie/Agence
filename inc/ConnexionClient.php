<?php
    include('Fonction.php');
    $mail=$_POST['email'];
    $pwd=$_POST['password'];
    if(verifyUser($mail,$pwd)==false)
    {
        header("location:../pages/login.php?error=0");
    }
    else
    {
        session_start();
        $_SESSION['connecte']=getIdClient($_POST['email'],$_POST['password']);
        echo $_SESSION['connecte'];
        header("location:../pages/acceuilClient.php");
    }
?>