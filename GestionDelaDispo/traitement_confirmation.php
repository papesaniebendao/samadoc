<?php
// traitement_confirmation.php

require_once '../connexionDB.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();

    $id_user = $_POST['id_user'];
    $id_medecin = $_POST['id_medecin'];

    if (isset($_POST['valider'])) {
        // Code pour mettre à jour le champ 'confirme' à true
        $sql = "UPDATE msrendezvoususers SET confirme = true WHERE id_user = :id_user AND id_medecin = :id_medecin";
    } elseif (isset($_POST['refuser'])) {
        // Code pour mettre à jour le champ 'confirme' à false
        $sql = "UPDATE msrendezvoususers SET confirme = false WHERE id_user = :id_user AND id_medecin = :id_medecin";
    }

    $requete = $connexion->prepare($sql);
    $requete->bindParam(':id_user', $id_user);
    $requete->bindParam(':id_medecin', $id_medecin);
    $requete->execute();

    // Redirection vers la page précédente ou une autre page après le traitement
    header("Location: tableau_de_bord_medecin.php");
    exit();
}
?>
