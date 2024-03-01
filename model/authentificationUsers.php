<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = trim(htmlspecialchars($_POST['email']));
            $passwordsaisi = $_POST['password'];
            $passwordsaisi = trim(htmlspecialchars($passwordsaisi));

            include("../connexionDB.php");

            $query = "SELECT id, nom, prenom, email, telephone, motdepasse FROM msusers WHERE email = :email";
            $stmt = $connexion->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($passwordsaisi, $user['motdepasse'])) {
                $_SESSION['id'] = $user['id'];  
                $_SESSION['nom'] = $user['nom']; 
                $_SESSION['email'] = $user['email'];
                $_SESSION['telephone'] = $user['telephone'];

                // Stoker les informations dans la session
                $_SESSION['user_info'] = $user;

                header("Location: ../RechercheDeServices/Barre_De_Recherche.php");
                exit();
            } else {
                // Mot de passe incorrect
                echo 'Mot de passe incorrect';
                header("Location: ../inscriptionConnexion/connexionInscription.php");
            }
        } else {
            // Les champs ne doivent pas être vides
            header("Location: ../inscriptionConnexion/connexionInscription.php");
            exit();
        }
    } else {
        // Les champs email et password doivent être définis
        header("Location: ../inscriptionConnexion/connexionInscription.php");
        exit();
    }
} else {
    // Requête non autorisée
    header("Location: ../inscriptionConnexion/connexionInscription.php");
    exit();
}
?>
