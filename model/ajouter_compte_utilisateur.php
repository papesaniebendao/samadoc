<?php
  

  if($_SERVER['REQUEST_METHOD'] === 'POST')
  {
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['numerotelephone'])  && isset($_POST['motdepasse']) && isset($_POST['confirmemotdepasse']))
    {
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['numerotelephone'])  && !empty($_POST['motdepasse']) && !empty($_POST['confirmemotdepasse']))
        {
            //connexion a la base de donnees
            include("../connexionDB.php");

            //recuperation des valeurs saisies par l'admin
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);
            $telephone = htmlspecialchars($_POST['numerotelephone']);
            $password = htmlspecialchars($_POST['motdepasse']);
            $confirmpassword = htmlspecialchars($_POST['confirmemotdepasse']);
            
            if($password ===$confirmpassword){
                //hacher le mot de passe
                $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

                $requete = $connexion->prepare("INSERT INTO msusers(nom,prenom,email,telephone,motdepasse) VALUES(:nom,:prenom,:email,:telephone,:motdepasse)");
                $resultat=$requete->execute(array(
                    ':nom'=>$nom,
                    ':prenom'=>$prenom,
                    ':email'=>$email,
                    ':telephone'=>$telephone,
                    ':motdepasse'=>$hashedPassword
                )); 

                if($resultat === false){
                    echo 'insertion echoue</br>';
                }else{
                    echo 'insertion reussie</br>';
                    header("LOcation:../Gestiondesutilisateurs/gestion_des_utilisateurs.html");
                }
            }
        }
    }
  }