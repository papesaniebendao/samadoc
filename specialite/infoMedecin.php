<?php 
    include("../connexionDB.php"); 
    if(session_status()== PHP_SESSION_NONE)
    {
        session_start();
    }
    if(isset($_SESSION['id_medecin_choice'])) // Correction du nom de la variable
    {
        $id_medecin = $_SESSION['id_medecin_choice']; // Utilisation du même nom de variable
        $req = 'SELECT nom, prenom, specialite, telephone, email, adresse FROM msmedecins WHERE id = :idMed';
        $res = $connexion->prepare($req);
        $res->bindParam(':idMed', $id_medecin); // Correction du nom du paramètre
        $res->execute();   
        $tab = $res->fetch(PDO::FETCH_ASSOC);
    } 
    else 
    {
        // Gérer le cas où $_SESSION['id_medecin_choice'] n'est pas défini
    }
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affissatou NDOYE DIOP- dentiste</title>
    <link rel="stylesheet" href="medecine.css">
    <script src="https://kit.fontawesome.com/3c086030c0.js" crossorigin="anonymous"></script>
</head>
<body>
    

    <div class="navbar">
        <h2>SamaDoc</h2>
        <nav>
            <ul id="ul">
                <li><i class="fas fa-stethoscope"></i><a href="#"> Vous etes medecin</a></li>
                <li><i class="fas fa-question-circle"></i><a href="#" id="openModal"> Centre d'aide</a></li>
                <li><i class="fas fa-user"></i><a href="../inscriptionConnexion/connexionInscription.html" id="connexion"> Se Connecter</a></li>
                <li><a href="avisevaluation.html" id="openModal"><i class="fas fa-question-circle"></i>&nbsp;Avis Et Evaluation</a></li>
                <li><a href="../messagerie/messagerie.html">Notification</a></li>
            </ul>
        </nav>
    </div>

    <div class="entete" >
        <h2><?php echo 'DR'. $tab['prenom'].' '.$tab['nom']; ?> <i class="fa fa-star-o" aria-hidden="true"></i></h2>
        <p><?php echo $tab['specialite']; ?></p>
    </div>

    <div class="corps">
        <div class="part1">
            <p>Lieu: Cabinet du  <?php echo 'DR '. $tab['prenom'].' '.$tab['nom']; ?></p>
        </div>

        <div class="part2">
            <h2><i class="fa fa-calendar-o" aria-hidden="true"></i> Calendrier de disponibilités</h2>
            <h3><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Horaires</h3>
            <p>
                
            </p>
            <h3> Contacts</h3>
            <p>
                <i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $tab['email']; ?> <br><br>
                <i class="fa fa-phone" aria-hidden="true"></i> <?php echo $tab['telephone']; ?>
            </p>
        </div>

        <div class="part3">
            <h3><i class="fa fa-money" aria-hidden="true"></i> Tarifs</h3>
            <p>Consulation  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11 500 FCFA</p><br>
            <h4>Méthode de paiement</h4>
            <ul>
                <li>En ligne</li>
            </ul>
            <h3 id="h3"><i class="fa fa-info-circle" aria-hidden="true"></i> Informations</h3>
            <h4 id="h4"><i class="fa fa-map-marker" aria-hidden="true"></i> Accés</h4>
            <p>Cabinet médicale <br><?php echo $tab['adresse']?> <br>
            </p>
        </div>
        
        <div class="part4">
            <div class="sous-part">
                <p> Prendre rendez-vous en ligne<br><br>
                <i class="fa fa-info-circle" aria-hidden="true"></i> Veillez renseigner les champs suivants</p>
            </div>
            <div class="formulaire">
                <form action="" method="post">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" placeholder="DIOP" required><br>
                    <label for="nom">Prénom</label>
                    <input type="text" id="prenom" placeholder="Mouhamadou Mahmoud" required><br>
                    <label for="nom">Motif de Consulation</label>
                    <select id="motif" required>
                        <option value="" disabled selected hidden>Choisisser votre motif de consulation</option>
                        <option value="option1">Blanchissement</option>
                        <option value="option2">Controle</option>
                        <option value="option3">Détartrage</option>
                        <option value="option4">Première consulation</option>
                        <option value="option5">Soins dentaires</option>
                    </select>
                    <label id="jr" for="jour">Jour de rendez-vous</label>
                    <select id="jour" required>
                        <option value="" disabled selected hidden>Sélectionner le jour de votre rendez-vous</option>
                        <option value="option1">Lundi</option>
                        <option value="option2">Mardi</option>
                        <option value="option3">Mercredi</option>
                        <option value="option4">Jeudi</option>
                        <option value="option4">Vendredi</option>
                        <option value="option4">Samedi</option>
                    </select>
                    <label id="hr" for="heure">Heure de rendez-vous</label>
                    <input type="time" id="heure" min="08:00" max="19:30" value="08:12" required>
                    <span><a href="paiement.html"><i class="fa fa-money" aria-hidden="true"></i> Paiement en ligne</a></span>
                    <button id="sub" type="submit">Valider</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
