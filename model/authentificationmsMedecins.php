<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = trim(htmlspecialchars($_POST['email']));
            $passwordsaisi = $_POST['password'];
            //$passwordsaisi = trim(htmlspecialchars($passwordsaisi));

 
            echo 'Mot de passe saisi avant : ' . $passwordsaisi;

            include("../connexionDB.php");

            $query = "SELECT id, nom, prenom, email, telephone, motdepasse FROM msmedecins WHERE email = :email";
            $stmt = $connexion->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            echo 'Mot de passe saisi apres: ' . $passwordsaisi;
            echo 'Mot de passe stocke :' . $user['motdepasse'];

            if ($user && password_verify($passwordsaisi, $user['motdepasse'])){
                // Mot de passe correct
                $_SESSION['id_medecin'] = $user['id'];  
                $_SESSION['nom_medecin'] = $user['nom']; 
                $_SESSION['prenom_medecin'] = $user['prenom'];
                $_SESSION['email_medecin'] = $user['email'];
                $_SESSION['telephone_medecin'] = $user['telephone'];

                

                //var_dump($user);

                // Rediriger vers la page appropriée
                header("Location:../profilMedecin/profile_medecin .php");
                exit();
            } else {
                // Mot de passe incorrect
                echo 'Mot de passe incorrect';
                var_dump($user);
                var_dump($passwordsaisi);
                var_dump($user['motdepasse']);
                 //Vous pourriez envisager de rediriger vers la page de connexion avec un message d'erreur
                 header("Location:../connexionMedecin/connexionMedecin.php");
                 exit();
            }
        } else {
            // Les champs ne doivent pas être vides
            header("Location:../connexionMedecin/connexionMedecin.php");
            exit();
        }
    } else {
        // Les champs email et password doivent être définis
        header("Location:../connexionMedecin/connexionMedecin.php");
        exit();
    }
} else {
    // Requête non autorisée
    header("Location:../connexionMedecin/connexionMedecin.php");
    exit();
}
?>
