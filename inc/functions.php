
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Affiche **tous** les niveaux d’erreurs
error_reporting(E_ALL);
require ('connexion.php');

function verification($pseudo){
    $rqt=sprintf("SELECT * from User where pseudo='%s';",$pseudo);
    $resultat=mysqli_query(dbconnect(),$rqt);
    $donnee=mysqli_fetch_assoc($resultat);
    if (!empty($donnee)) {
        return 0;
    }
    else {
        return 1;
    }
}
function insert_User($pseudo){
    $rqt = sprintf("INSERT INTO User (pseudo) value ('%s');" , $pseudo);
    $resultat = mysqli_query(dbconnect(),$rqt);
}
function find_id_user($pseudo){
    $rqt=sprintf("SELECT id_user from User where pseudo='%s';",$pseudo);
    $resultat = mysqli_query(dbconnect(),$rqt);
    $donne= mysqli_fetch_assoc($resultat);
    return $donne['id_user'];
}
?>