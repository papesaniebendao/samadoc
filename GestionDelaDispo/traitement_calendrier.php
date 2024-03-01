<?php
// traitement_calendrier.php

require_once '../connexionDB.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer l'ID du médecin depuis la session
    $id_medecin = $_SESSION['id_medecin'];

    // Récupérer les heures de début et de fin pour chaque jour
    $hd_lundi = $_POST['hd_lundi'];
    $hf_lundi = $_POST['hf_lundi'];

    $hd_mardi = $_POST['hd_mardi'];
    $hf_mardi = $_POST['hf_mardi'];

    $hd_mercredi = $_POST['hd_mercredi'];
    $hf_mercredi = $_POST['hf_mercredi'];

    $hd_jeudi = $_POST['hd_jeudi'];
    $hf_jeudi = $_POST['hf_jeudi'];

    $hd_vendredi = $_POST['hd_vendredi'];
    $hf_vendredi = $_POST['hf_vendredi'];

    $hd_samedi = $_POST['hd_samedi'];
    $hf_samedi = $_POST['hf_samedi'];

    // Préparer la requête SQL d'insertion
    $sql = "INSERT INTO disponibilite_medecins (
                id_medecin,
                heure_debut_lundi, heure_fin_lundi,
                heure_debut_mardi, heure_fin_mardi,
                heure_debut_mercredi, heure_fin_mercredi,
                heure_debut_jeudi, heure_fin_jeudi,
                heure_debut_vendredi, heure_fin_vendredi,
                heure_debut_samedi, heure_fin_samedi
            )
            VALUES (
                :id_medecin,
                :hd_lundi, :hf_lundi,
                :hd_mardi, :hf_mardi,
                :hd_mercredi, :hf_mercredi,
                :hd_jeudi, :hf_jeudi,
                :hd_vendredi, :hf_vendredi,
                :hd_samedi, :hf_samedi
            )";

    // Exécuter la requête avec les valeurs
    $requete = $connexion->prepare($sql);
    $requete->bindParam(':id_medecin', $id_medecin);
    $requete->bindParam(':hd_lundi', $hd_lundi);
    $requete->bindParam(':hf_lundi', $hf_lundi);
    $requete->bindParam(':hd_mardi', $hd_mardi);
    $requete->bindParam(':hf_mardi', $hf_mardi);
    $requete->bindParam(':hd_mercredi', $hd_mercredi);
    $requete->bindParam(':hf_mercredi', $hf_mercredi);
    $requete->bindParam(':hd_jeudi', $hd_jeudi);
    $requete->bindParam(':hf_jeudi', $hf_jeudi);
    $requete->bindParam(':hd_vendredi', $hd_vendredi);
    $requete->bindParam(':hf_vendredi', $hf_vendredi);
    $requete->bindParam(':hd_samedi', $hd_samedi);
    $requete->bindParam(':hf_samedi', $hf_samedi);

    $requete->execute();

    // Redirection vers la page précédente ou une autre page après le traitement
    header("Location: tableau_de_bord_medecin.php");
    exit();
}
?>

