<?php
   session_start();
   if(isset($_SESSION['nom']) && !empty($_SESSION['nom']))
   {
    //require_once '../model/authentificationUsers.php';
    echo '         
      <!DOCTYPE html>
      <html lang="fr">
         <head>
           <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Barre de Recherche</title>
            <link rel="stylesheet" href="Barre_De_Recherche.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
             <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Pacifico&display=swap" rel="stylesheet">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        </head>
      <body>
          <section class="header-search-section">
            <header>
              <div class="Mon logo"><a id=pageAccueil href="#">SamaDoc</a></div>
              <nav>
                <ul>
                    <li><a id="Apropos" href="../Apropos/A_propos.html">A propos</a></li>
                    <li><a href="../profilUser/profil_user.html" id="connexion">Mon Compte</a></li>
                </ul>
              </nav>
           </header>
           <div class="search-container">
            <div class="search-box">
                <form action="../model/traitement_barre_de_recherche.php" method="POST">
                     <input type="text" id="search-input"  name="specialite" placeholder="Rechercher un service médical ou de paiement ...">
                     <button id="search-button ">Rechercher</button>
                </form>
            </div>
            <div id="suggestions"></div>
        </div>
    </section>

    
   // <!-- Contenu de la fenêtre modale -->
    <div class="modal-overlay" id="modal">
        <div class="modal-content">
            <h2>Questions fréquentes - Centre d\'aide de l\'Hôpital SamaDoc</h2>
            <p>Bienvenue dans notre centre d\'aide en ligne. Trouvez ci-dessous des réponses aux questions fréquemment posées concernant nos services hospitaliers. Si vous ne trouvez pas la réponse à votre question, n\'hésitez pas à nous contacter pour obtenir de l\'aide personnalisée.</p>
            <ol>
                <li>
                    <h3>Comment prendre un rendez-vous avec un medecin sur samaDoc ?</h3>
                    <ul>
                        <li>Vous pouvez prendre un rendez-vous en ligne en visitant notre site web et en utilisant notre service de réservation en ligne.</li>
                        <li>Vous pouvez également appeler notre service de prise de rendez-vous au <strong>+221 77 356 36 35</strong>.</li>
                    </ul>
                </li>
                <li>
                    <h3>Comment annuler ou modifier un rendez-vous ?</h3>
                    <ul>
                        <li>Vous pouvez annuler ou modifier un rendez-vous en ligne en accédant à votre compte sur notre site web.</li>
                        <li>Si vous avez besoin d\'assistance, veuillez appeler notre service de prise de rendez-vous.</li>
                    </ul>
                </li>
                <li>
                    <h3>Comment puis-je obtenir des informations sur les médecins disponibles ?</h3>
                    <p>Consultez la section "Nos Médecins" sur notre site web pour en savoir plus sur nos médecins, leurs spécialités et leurs disponibilités.</p>
                </li>
            </ol>
            <h3>Contactez samaDoc pour de l\'aide supplémentaire :</h3>
            <p>Téléphone : <strong>+221 77 356 36 35</strong><br>
            Email : <strong>samadoc@gmail.com</strong><br>
            Adresse : <strong>SamaDoc</strong></p>
            <p>Nous sommes là pour vous aider à obtenir les meilleurs soins possibles à l\'Hôpital SamaDoc. N\'hésitez pas à nous contacter si vous avez des questions ou des préoccupations.</p>
        </div>
    </div>


    <div>       
        <a id="medecin"  href="../CenlendrierDeReservation/MedecinGeneral.html">Medecin generaliste</a>
       <a  id="chirurgien"  href="../CenlendrierDeReservation/Chirurgien.html">Chirurgie</a>
       <a id="dentiste"  href="../CenlendrierDeReservation/Dentiste.html">Dentiste</a>
       <a id="dermatologue"  href="../CenlendrierDeReservation/Dermatologue.html">Dermatologie</a>
       <a id="ophtalmologue" href="../CenlendrierDeReservation/Ophtalmologue.html">Ophtalmologie</a>
       <a  id="pediatre"  href="../CenlendrierDeReservation/Pediatre.html">Pediatrie</a>
    </div>   
    <div id="search-results"></div>
    <a href="#" id="LienService">Cliquez ici pour accéder à ce service!</a>
   
   <!--diseign de la page de recherche -->
	<!-- La barre de recherche -->
	 <!--les images illustrations -->
	<div class="bloc_image">
       <div class="service">
            <h2 class="service-text"><p>SamaDoc est à votre entiere service! </p></h2>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h2>À Propos de SamaDoc</h2>
                <p>SamaDoc est votre plateforme de consultation en ligne, offrant des services médicaux de qualité à distance. Notre mission est de rendre les soins de santé accessibles et pratiques pour tous.</p>
                <a href="../CenlendrierDeReservation/avisevaluation.html" style="color: rgb(0, 220, 220); text-decoration: none;">
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
            <p><a href="ConditionsDutilisation.pdf">Conditions d\'Utilisation</a> | <a href="PolitiqueConfidentialite.pdf">Politique de Confidentialité</a></p>
            <p>&copy; 2023 SamaDoc. Tous droits réservés.</p>
        </div>
    </footer>


    <script src="Barre_De_Recherche.js"></script>
   </body>
  </html>
    ';   
   }else{
    header("Location:../inscriptionConnexion/connexionInscription.php");
   } 
?>





