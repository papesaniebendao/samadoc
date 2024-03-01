<?php
if (
    isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) &&
    isset($_POST['confirm_email']) && isset($_POST['password']) && isset($_POST['telephone'])
) {
    if (
        !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) &&
        !empty($_POST['confirm_email']) && !empty($_POST['password']) && !empty($_POST['telephone'])
    ) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $confirm_email = htmlspecialchars($_POST['confirm_email']);
        $password = htmlspecialchars($_POST['password']);
        $telephone = htmlspecialchars($_POST['telephone']);

        if ($email !== $confirm_email) {
            echo 'Email différent </br>';
            header("Location:../inscriptionConnexion/connexionInscription.php");
            exit();
        }

        // Utilisez password_hash pour hacher les mots de passe de manière sécurisée
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        include("../connexionDB.php");

        $query = "INSERT INTO msUsers(nom, prenom, email, telephone, motdepasse) VALUES (:nom, :prenom, :email, :telephone, :motdepasse)";
        $stmt = $connexion->prepare($query);

        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':motdepasse', $hashedPassword);

        if ($stmt->execute()) {
            echo 'Insertion réussie dans la table msUsers</br>';
            header("Location:../inscriptionConnexion/connexionInscription.php");
            exit();
        } else {
            echo 'Insertion dans la table msUsers a échoué</br>';
        }

    } else {
        echo 'Un champ non renseigné </br>';
    }
} else {
    echo 'Une variable inexistante</br>';
}
?>
