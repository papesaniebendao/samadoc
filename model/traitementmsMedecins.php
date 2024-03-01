<?php
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['confirm_email']) && isset($_POST['password']) && isset($_POST['telephone']) && isset($_POST['adresse']) && isset($_POST['specialite'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['confirm_email']) && !empty($_POST['password']) && !empty($_POST['telephone']) && !empty($_POST['adresse']) && !empty($_POST['specialite'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $confirm_email = htmlspecialchars($_POST['confirm_email']);
        $password = trim(htmlspecialchars($_POST['password']));
        $telephone = htmlspecialchars($_POST['telephone']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $specialite = htmlspecialchars($_POST['specialite']);

        if ($email !== $confirm_email) {
            echo 'Email différent </br>';
            header("Location:../inscriptionConnexion/connexionInscription.php");
            exit();
        }

        // Utilisez password_hash pour hacher les mots de passe de manière sécurisée
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        include("../connexionDB.php");

        $query = "INSERT INTO msmedecins(nom, prenom, email, telephone,specialite,adresse, motdepasse) VALUES (:nom, :prenom, :email, :telephone,:specialite,:adresse,:motdepasse)";
        $stmt = $connexion->prepare($query);

        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':specialite',$specialite);
        $stmt->bindParam(':adresse',$adresse);
        $stmt->bindParam(':motdepasse', $hashedPassword);

        if ($stmt->execute()) {
            echo 'Insertion réussie dans la table msmedecinsers</br>';
            header("Location:../connexionMedecin/connexionMedecin.php");
            exit();
        } else {
            echo 'Insertion dans la table msMecins a echouee</br>';
        }

    } else {
        echo 'Un champ non renseigné </br>';
    }
} else {
    echo 'Une variable inexistante</br>';
}
?>
