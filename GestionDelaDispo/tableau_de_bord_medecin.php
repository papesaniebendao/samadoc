<?php

 require_once '../connexionDB.php';

  session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mes Rendez-vous </title>
	<link rel="stylesheet" href="tableau_de_bord_doc.css">
	<script src="tableau_de_bord.js"></script>
    <script src="https://kit.fontawesome.com/3c086030c0.js" crossorigin="anonymous"></script>
</head>
<body>
	<header class="header" id="header">
            <div class="Mon-logo">SamaDoc</div>
            <nav>
                <ul>
                    <li><i class="fas fa-question-circle"></i><a href="#" id="openModal">Centre d'aide</a></li>
                    <li>A propos</li>
                    <li>Mes Rendez-vous</li>
                    <li><a href=#>Mon compte</a></li>
                </ul>
            </nav>
    </header> 
          <!-- Contenu de la fenêtre modale -->
    <div class="modal-overlay" id="modal">
        <div class="modal-content">
            <h2>Questions fréquentes - Centre d'aide de SamaDoc</h2>
            <p>Bienvenue dans notre centre d'aide en ligne. Trouvez ci-dessous des réponses aux questions fréquemment posées concernant nos services hospitaliers. Si vous ne trouvez pas la réponse à votre question, n'hésitez pas à nous contacter pour obtenir de l'aide personnalisée.</p>
            <ol>
                <li>
                    <h3>Comment prendre un rendez-vous avec SamaDoc ?</h3>
                    <ul>
                        <li>Vous pouvez prendre un rendez-vous en ligne en visitant notre site web et en utilisant notre service de réservation en ligne.</li>
                        <li>Vous pouvez également appeler notre service de prise de rendez-vous au <strong>+221 77 356 36 35</strong>.</li>
                    </ul>
                </li>
                <li>
                    <h3>Comment annuler ou modifier un rendez-vous ?</h3>
                    <ul>
                        <li>Vous pouvez annuler ou modifier un rendez-vous en ligne en accédant à votre compte sur notre site web.</li>
                        <li>Si vous avez besoin d'assistance, veuillez appeler notre service de prise de rendez-vous.</li>
                    </ul>
                </li>
                <li>
                    <h3>Comment puis-je obtenir des informations sur les médecins disponibles ?</h3>
                    <p>Consultez le calendrier de disponibilite de nos medecins sur notre site web pour en savoir plus, leurs spécialités et leurs disponibilités.</p>
                </li>
            </ol>
            <h3>Contactez samaDoc pour de l'aide supplémentaire :</h3>
            <p>Téléphone : <strong>+221 77 356 36 35</strong><br>
            Email : <strong>samadoc@gmail.com</strong><br>
            Adresse : <strong>samaDoc</strong></p>
            <p>Nous sommes là pour vous aider à obtenir les meilleurs soins possibles. N'hésitez pas à nous contacter si vous avez des questions ou des préoccupations.</p>
        </div>
    </div>
      <div class="reservations">
          <div class="reservation-liste">
             <h2><i class="fa fa-bell" aria-hidden="true"></i> les Reservations</h2>
               <?php
            $idmedecin = $_SESSION['id_medecin'];
            $sql = "SELECT u.id,u.prenom, u.nom, r.date_rendez_vous, r.heure_debut, r.heure_fin, r.motif 
                    FROM msrendezvoususers r 
                    JOIN msusers u ON u.id = r.id_user
                    WHERE r.id_medecin = :id_medecin;";
                  $requete = $connexion->prepare($sql);
                  $requete->bindParam(':id_medecin', $idmedecin);
                 $requete->execute();
                 $tab_res = $requete->fetchAll(PDO::FETCH_ASSOC);
                 if(!$tab_res){
                     echo 'pas de reservation';
                 }
                
            foreach ($tab_res as $reservation) {
                
                echo '<div class="reservation-box">';
                echo '<p><strong>Nom:</strong> ' . $reservation['prenom'] . ' ' . $reservation['nom'] . '</p>';
                echo '<p><strong>Date et heure:</strong> ' . $reservation['date_rendez_vous'] . ' ' . $reservation['heure_debut'] . '</p>';
                echo '<p><strong>Motif de consulation:</strong> ' . $reservation['motif'] . '</p>';
                echo '</div>';
                echo ' <div class="buttons">';
                echo '<form method="post" action="traitement_confirmation.php">';
                echo '<input type="hidden" name="id_user" value="' . $reservation['id'] . '">';
                echo '<input type="hidden" name="id_medecin" value="' . $idmedecin . '">';
                echo '<input type="submit" name="valider" id="lab1" value="Valider" class="btn-valider">';
                echo '</form>';
                echo '<form method="post" action="traitement_confirmation.php">';
                echo '<input type="hidden" name="id_user" value="' . $reservation['id'] . '">';
                echo '<input type="hidden" name="id_medecin" value="' . $idmedecin . '">';
                echo '<input type="submit" name="refuser" id="lab2" value="Refuser" class="btn-refuser">';
                echo '</form>';
                echo '</div>';
            }
            ?>
               
             <!-- Boutons de validation -->
         </div>
     </div> 


         <form class="calendrier" method="post" action="traitement_calendrier.php">
               <h2 class="titre_cal"><i class="fa fa-calendar-o" aria-hidden="true"></i> Enregister mes disponibilités de la semaine</h2>
               <div class="calendar">
                 <table>
                 <thead>
                      <tr>
                        <th>Lundi</th>
                          <th>Mardi</th>
                          <th>Mercredi</th>
                          <th>Jeudi</th>
                          <th>Vendredi</th>
                         <th>Samedi</th>
                         <th>Dimanche</th>
                       </tr>
                  </thead>
                  <tbody>
                      <tr> 
                         <td><input name="hd_lundi" type="time"></td>
                         <td><input name= "hd_mardi"type="time"></td>
                         <td><input name="hd_mercredi" type="time"></td>
                         <td><input name="hd_jeudi"type="time"></td>
                         <td><input name="hd_vendredi" type="time"></td>
                         <td><input name="hd_samedi" type="time"></td>
                         <td><i id="i" class="fa fa-times" aria-hidden="true"></i></td>
                     </tr>
                     <tr>
                        
                         <td><input name="hf_lundi" type="time"></td>
                         <td><input name="hf_mardi" type="time"></td>
                         <td><input name="hf_mercredi" type="time"></td>
                         <td><input name="hf_jeudi" type="time"></td>
                         <td><input name="hf_vendredi" type="time"></td>
                         <td><input name="hf_samedi" type="time"></td>
                         <td><i id="i" class="fa fa-times" aria-hidden="true"></i></td>
                     </tr>
            </tbody>
            </table>
             <input type="submit" id="lab1" value="Enregister"class="Enregister"></input>
        </form>
      <div>
        
    </div>  
      <div class="fenetre-modale" id="fenetreModale">
    <div class="contenu-modale">
        <p><strong>ces changements ont bien été enregistrés et seront appliqués sous peu !</strong></p>
        <button id="boutonFermerModale">Fermer</button>
    </div>
</div>
 
<footer class="footer">
    <div class="footer-content">
        <div class="footer-section about">
            <h2>À Propos de SamaDoc</h2>
            <p>SamaDoc est votre plateforme de consultation en ligne, offrant des services médicaux de qualité à distance. Notre mission est de rendre les soins de santé accessibles et pratiques pour tous.</p>
            <a href="../CenlendrierDeReservation/avisevaluation.html" id="openModal" style="color: rgb(0, 220, 220); text-decoration: none;">
                <i class="fas fa-question-circle"></i>&nbsp;Voullez-vous nous evaluez?
            </a> 
        </div>
        
        <div class="footer-section contact">
            <h2>Contactez-Nous</h2>
            <p><i class="fas fa-map-marker-alt"></i> 123 Rue des Docteurs, Ville, Pays</p>
            <p><i class="fas fa-envelope"></i> contact@samadoc.com</p>
            <p><i class="fas fa-phone"></i> +123 456 789</p>
        </div>
        
        <div class="footer-section follow">
            <h2>Suivez-Nous</h2>
            <a href="https://www.facebook.com/" class="social-icon" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        
        <div class="footer-section specialities">
            <h2>Vous recherchez</h2>
            <div class="special">
                <ul class="special-list">
                    <li>Un chirurgien</li>
                    <li>Un dentiste</li>
                    <li>Une sage femme</li>
                </ul>
            </div>
            <div class="special">
                <ul class="special-list">
                    <li>Un pédiatre</li>
                    <li>Un dermatologue</li>
                    <li>Un ophtalmologue</li>
                </ul>
            </div>
            <div class="special">
                <ul class="special-list">
                    <li>Un gynecologue</li>
                    <li>Un opticien</li>
                    <li>Un psychologue</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <p><a href="ConditionsDutilisation.pdf">Conditions d'Utilisation</a> | <a href="PolitiqueConfidentialite.pdf">Politique de Confidentialité</a></p>
        <p>&copy; 2023 SamaDoc. Tous droits réservés.</p>
    </div>
</footer>
</body>

</html>

