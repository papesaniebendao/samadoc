<?php
   $serveur = '127.0.0.1';
   $user = 'root';
   $password = '';
   try{
    $connexion = new PDO("mysql:host=$serveur;dbname=mabase",$user,$password);
    //echo 'Connexion successfully...';
   }catch(PDOException $e){
    echo 'Erreur de connection'.$e->getMessage();
    exit(-1);
   }
?>  