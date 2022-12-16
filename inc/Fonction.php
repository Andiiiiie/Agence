<?php
function getConnexion()
{
    $user = 'postgres';
    $pass = 'motDePasse';
    $dsn='pgsql:host=localhost;port=5432;dbname=Agence';
    try {
        $connexion = new PDO($dsn, $user, $pass);
        //print "Connecte ";
    } catch (PDOException $e) {
        print "Erreur ! : " . $e->getMessage();
        die();
    }
    return $connexion;
}

function insertImage($id,$source)
{
    $requete="insert into \"Photos\" values(default,".$id.",'".$source."')";
    $connexion=getConnexion();
    $connexion->query($requete);
}

function deleteHabitat($id)
{
    $requete="delete from \"Habitations\" where \"idHabitation\"=".$id;
    $connexion=getConnexion();
    $connexion->query($requete);
}


function isFree($dateDebut,$dateFin,$idHabitation)
{
    $requete="select * from \"Reservations\" where \"idHabitation\"=".$idHabitation." and '".$dateDebut."' between debut and fin or \"idHabitation\"=".$idHabitation." and '".$dateFin."' between debut and fin";
    echo $requete;
    $connexion=getConnexion();
    $resultats=$connexion->query($requete);
    $reponse=$resultats->fetchAll();
    $resultats->closeCursor();
    if(sizeof($reponse)>0)
    {
        return false;
    }
    return true;
}

function getIdClient($mail,$mdp)
{
    $id=-1;
    $requete= "select * from \"Clients\" where email='".$mail."' and mot_de_passe='".$mdp."'";
    $connexion=getConnexion();
    $resultats=$connexion->query($requete);
    $reponse=$resultats->fetchAll();
    $resultats->closeCursor();
    if(sizeof($reponse)>0)
    {
        $id=$reponse[0]['idClient'];
    }
    return $id;
}

function verifyUser($mail,$mdp)
{
    $id=getIdClient($mail,$mdp);
    if($id==-1)
    {
        return false;
    }
    return true;
}

function insertReservation($debut,$fin,$habitat,$client)
{
    $requete="insert into \"Reservations\" values (default,'".$debut."','".$fin."',".$client.",".$habitat.")";
    echo $requete;
    $connexion=getConnexion();
    $connexion->query($requete);
}

function insertClient($mail,$nom,$mdp,$num)
{
    $requete="insert into \"Clients\" values (default,'".$mail."','".$nom."','".$mdp."','".$num."')";
    $connexion=getConnexion();
    $connexion->query($requete);
}

function insertHabitation($type,$nbChambre,$loyer,$quartier,$description){
    $requete="insert into \"Habitations\" values (default,'".$type."',".$nbChambre.",".$loyer.",'".$quartier."','".$description."')";
    $connexion=getConnexion();
    $connexion->query($requete);
}


function verifyAdmin($mail,$mdp)
{
    $requete= "select * from \"Admin\" where email='".$mail."' and mot_de_passe='".$mdp."'";
    $connexion=getConnexion();
    $resultats=$connexion->query($requete);
    $reponse=$resultats->fetchAll();
    $resultats->closeCursor();
    if(sizeof($reponse)>0)
    {
        return true;
    }
    return false;
}


function($mois,$annee,$jour)
{
    
}

function getJourMois($mois,$annee)
{
    $jours = array();
    for($i = 1; $i <= 31; $i++) {
        $time = mktime(12, 0, 0, $mois, $i, $annee);
        if (date('m', $time) == $mois) {
            $jours[] = date('d', $time);
        }
    }
    return $jours[sizeof($jours)-1];
}
function updateHabitat($id,$type,$nbChambre,$loyer,$quartier,$description)
{
    $requete="update \"Habitations\" set \"nbChambre\"=".$nbChambre.",type='".$type."',loyer=".$loyer.",quartier='".$quartier."',description='".$description."' where \"idHabitation\"=".$id;
    $connexion=getConnexion();
    $connexion->query($requete);
}

function getIdHabitat($description){
    $requete= "select * from \"Habitations\" where description='".$description."'";
    echo $requete;
    $connexion=getConnexion();
    $resultats=$connexion->query($requete);
    $reponse=$resultats->fetchAll();
    $resultats->closeCursor();
    return $reponse[0]['idHabitation'];
}


function recherche($motCle)
{
    $requete= "select * from \"Habitations\" where description like '%".$motCle."%'";
    $connexion=getConnexion();
    $resultats=$connexion->query($requete);
    $reponse=$resultats->fetchAll();
    $resultats->closeCursor();
    return $reponse;
}


function getAllHabitat(){
    $requete= "select * from \"Habitations\"";
    $connexion=getConnexion();
    $resultats=$connexion->query($requete);
    $reponse=$resultats->fetchAll();
    $resultats->closeCursor();
    return $reponse;
}

function getHabitatById($id){
    $requete= "select * from \"Habitations\" where \"idHabitation\"=".$id;
    $connexion=getConnexion();
    $resultats=$connexion->query($requete);
    $reponse=$resultats->fetchAll();
    $resultats->closeCursor();
    return $reponse;
}

function getDonneesHabitat($id)
{
    $requete= "select * from \"Habitations\" where \"idHabitation\"=".$id;
    $connexion=getConnexion();
    $resultats=$connexion->query($requete);
    $reponse=$resultats->fetchAll();
    $resultats->closeCursor();
    return $reponse; 
}


function getPhotosHabitat($id)
{
    $requete= "select * from \"Photos\" where \"lieu\"=".$id;
    
    $connexion=getConnexion();
    $resultats=$connexion->query($requete);
    $reponse=$resultats->fetchAll();
    $resultats->closeCursor();
    return $reponse; 
}
