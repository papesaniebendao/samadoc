
<?php
  
  include("../connexionDB.php");

  $msUsers = "CREATE TABLE msusers(
    id  INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telephone VARCHAR(9) NOT NULL,
    motdepasse VARCHAR(255) NOT NULL
   )";

   $resultat = $connexion->exec($msUsers);
   if($resultat === false){
    echo 'La creation de la table msUsers a echouee </br>';
   }else{
    echo 'La creation de la table msUsers a reussie </br>';
   }


   $msAdmins = "CREATE TABLE msadmins(
    id  INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    motdepasse VARCHAR(255) NOT NULL
   )";

   $resultat2 = $connexion->exec($msAdmins);
   if($resultat2 === false){
    echo 'La creation de la table msAdmins a echouee </br>';
   }else{
    echo 'La creation de la table msAdmins a reussie </br>';
   }
    


   $msMedecins = "CREATE TABLE msmedecins(
    id  INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telephone VARCHAR(9) NOT NULL,
    specialite VARCHAR(255) NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    motdepasse VARCHAR(255) NOT NULL
   )";

    $resultat3 = $connexion->exec($msMedecins);
   if($resultat3 === false){
     echo 'La creation de la table msMedecins a echouee </br>';
    }else{
    echo 'La creation de la table msMedecins a reussie </br>';
    }

    
   $msRendezVous = "CREATE TABLE msrendezvoususers(
    id_user  INT,
    id_medecin INT,
    date_rendez_vous DATE,
    heure_debut Time,
    heure_fin Time,
    confirme  BOOLEAN,
    motif  VARCHAR(255),
    montant INT,
    PRIMARY KEY (id_user,id_medecin,date_rendez_vous),
    FOREIGN KEY (id_user) REFERENCES msUsers(id),
    FOREIGN KEY (id_medecin) REFERENCES msMedecins(id)
   )";

    $resultat3 = $connexion->exec($msRendezVous);
   if($resultat3 === false){
     echo 'La creation de la table msRendezVousUsers a echouee </br>';
    }else{
    echo 'La creation de la table msRendezVousUsers a reussie </br>';
   }


   
   $msRendezVousAdmins = "CREATE TABLE msrendezvousAdmins(
    id_admin  INT,
    id_medecin INT,
    date_rendez_vous DATE,
    montant INT,
    PRIMARY KEY (id_admin,id_medecin,date_rendez_vous),
    FOREIGN KEY (id_admin) REFERENCES msMedecins(id),
    FOREIGN KEY (id_medecin) REFERENCES msMedecins(id)
   )";

    $resultat4 = $connexion->exec($msRendezVousAdmins);
   if($resultat4 === false){
     echo 'La creation de la table msRendezVousAdmins a echouee </br>';
    }else{
    echo 'La creation de la table msRendezVousAdmins a reussie </br>';
   }

   $disponibilite = "CREATE TABLE disponibilite_medecins(
        id_medecin  int,
        heure_debut_lundi Time,
        heure_fin_lundi Time,
        heure_debut_mardi Time, 
        heure_fin_mardi time,
        heure_debut_mercredi time,
        heure_fin_mercredi time,
        heure_debut_jeudi time,
        heure_fin_jeudi time,
        heure_debut_vendredi time,
        heure_fin_vendredi time,
        heure_debut_samedi time,
        heure_fin_samedi time,
        PRIMARY KEY (id_medecin)
   )";
   $resultat5 =$connexion->exec($disponibilite);
   if($resultat5 === false){
    echo 'La creation de la table disponibilite a echouee </br>';
   }else{
   echo 'La creation de la table disponibilite ,a reussie </br>';
  }


?>   