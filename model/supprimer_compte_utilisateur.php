<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['motdepasse'])) {
        if (!empty($_POST['email']) && !empty($_POST['motdepasse'])) {
            // Connexion à la base de données
            include("../connexionDB.php");

            // Récupération des valeurs saisies par l'admin
            $email = htmlspecialchars($_POST['email']);
            $password = trim(htmlspecialchars($_POST['motdepasse']));

            // Requête de suppression
            $requete = $connexion->prepare("DELETE FROM msUsers WHERE email = :email");
            $resultat = $requete->execute(array(':email' => $email));
            $user = $requete->fetch(PDO::FETCH_ASSOC);
            if ($user){
                echo 'Suppression de l\'utilisateur</br>';
                echo $user['nom'].' '.$user['prenom'].'  a reussie!</br>';
                echo '<button  type="button"><a href="../Gestiondesutilisateurs/gestion_des_utilisateurs.html">OK</a></button>';
                //header("Location:../Gestiondesutilisateurs/gestion_des_utilisateurs.html");
                exit(); // Assurez-vous de terminer le script après la redirection
            } else {
                echo 'Suppression échouée</br>';
            }
        } else {
            echo 'Les champs email et mot de passe ne doivent pas être vides</br>';
        }
    } else {
        echo 'Les champs email et mot de passe sont requis</br>';
    }
}
?>
