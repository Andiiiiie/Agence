<?php
include('Fonction.php');
$dossier = 'C:\\wamp64\\www\\Agence\\assets\\images\\';
$fichier = basename($_FILES['nom_du_fichier']['name']);
insertImage($_POST['habitat'],$fichier);
$taille_maxi = 100000;
$taille = filesize($_FILES['nom_du_fichier']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['nom_du_fichier']['name'], '.');
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
 $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc';
}
if($taille>$taille_maxi)
{
 $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
 //On formate le nom du fichier ici...
 $fichier = strtr($fichier,
 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
 if(move_uploaded_file($_FILES['nom_du_fichier']['tmp_name'], $dossier . $fichier)) //Si
 {
    header("location:../pages/voirDetails?id=".$_POST['habitat']);
 //echo 'Upload effectué avec succès !';
 //header('Location:upload.html');
 //echo $fichier ;
 }
 else //Sinon (la fonction renvoie FALSE).
 {
 //echo 'Echec de l\'upload !';

 }
}
else
{
 echo $erreur;
}
?>






