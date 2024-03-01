<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profile</title>
    <link rel="stylesheet" href="profil_user.css">
    <script src="https://kit.fontawesome.com/3c086030c0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Pacifico&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/268de9d7bf.js" crossorigin="anonymous"></script>
    <script src="java.js"></script>
</head>
<body>
    <header class="header" id="header">
        <div class="Mon logo">SamaDoc</div>
        <nav>
            <ul>
                <li><i class="fas fa-question-circle"></i><a href="#" id="openModal">Centre d'aide</a></li>
                <li><a href="../GesReserUtilisateur/reservation.html">Mes Reservations</a></li>
                <li><a href="#">Mon compte</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Notification</a></li>
            </ul>
        </nav>
    </header>
       <div class="conteneur">
           <section class=" section1"> 
                 <strong class="icone1"><i class="fa-solid fa-user fa-5x"></i></strong>
                 <p class="text_style1">Mon profil</p>
                  <section>
                        <p class="bouton_lien"><a href="modif_info.html" class="lien1">Modifier les infos</a></p>
                  </section>
          </section>
          <section class="section2">
            <?php
            // Vérifie si la session est démarrée et si les informations de l'utilisateur sont présentes
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            if(isset($_SESSION['user_info'])) {
                $user_info = $_SESSION['user_info'];
            ?>
                <p class="text_style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nom:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user_info['nom']; ?></p> <hr>
                <p class="text_style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prenom:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user_info['prenom']; ?></p> <hr>
                <p class="text_style2"><strong class="icone2"><i class="fa-solid fa-phone fa-2x"></i></strong>&nbsp;&nbsp;Telephone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user_info['telephone']; ?></p> <hr>
                <p class="text_style2"><strong class="icone2"><i class="fa-solid fa-envelope fa-2x"></i></strong>&nbsp;&nbsp;Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user_info['email']; ?></p>
                <hr>
            <?php
            } else {
                // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
                header("Location: ../inscriptionConnexion/connexionInscription.php");
                exit();
            }
            ?>
            <section > 
               <p><strong  class="icone2"><i class="fa-solid fa-trash fa-2x"></i></strong><a  href="supprimer.html" class="lien" target="_self"> Supprimer mon compte</a></p>
               <p> <strong  class="icone2"><i class="fa-solid fa-share-from-square fa-2x"></strong></i><a href="deconnexion.html" class="lien" target="_self">Deconnecter</a></p>
           </section>
           </section>
          
    </div>
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

        
    
        
    
       <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h2>À Propos de SamaDoc</h2>
                <p>SamaDoc est votre plateforme de consultation en ligne, offrant des services médicaux de qualité à distance. Notre mission est de rendre les soins de santé accessibles et pratiques pour tous.</p>
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