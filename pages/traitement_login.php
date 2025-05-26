<?php
require("../inc/functions.php");

if (isset($_GET['username']) ){
    $pseudo=$_GET['username'];
  $c=verification($pseudo);
 
       if($c==0){
            session_start();
            $_SESSION['pseudo']=$pseudo;
            $id_user=find_id_user($pseudo);
            $_SESSION['id_user']=$id_user;
            header("Location:accueil.php");

       }
       else{
            insert_User($pseudo);
            session_start();
            $_SESSION['pseudo']=$pseudo;
            $id_user=find_id_user($pseudo);
            $_SESSION['id_user']=$id_user;
           header("Location:accueil.php");
            
       }

    }
?>